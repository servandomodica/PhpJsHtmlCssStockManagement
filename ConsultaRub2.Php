<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="Estilos.Css"/>
<link rel="icon" href="img/favicon.png" sizes="any" type="image/svg+xml">
<title>Consultar por rubro</title>
</head>

<script>
function eliminar(webdestino)
{
if(confirm("¿Confirma la eliminación?"))
{
location=webdestino;
}
else
alert("Eliminación desestimada");
}
</script>

<Body BgColor = "#99FFCC">

<Table align="Center" width="60%">
 <Tr>
  <Td>
   <br><H1> <Center> Consultar artículos por rubro </Center> </H1>
   <Hr>
   
   <?Php
   require "Conexion.php";
   $idCone = Conectar();
   
   $CODRUB = $_REQUEST['rub'];
   
   $Sql1 = "Select art_cod, art_des, art_rub, art_pre, art_sto, art_fot from art where art_rub='$CODRUB' order by art_des";
   $registros = mysqli_query($idCone, $Sql1) or die("Error en el Select1");
   
   $Sql2 = "Select rub_nom from rub where rub_cod='$CODRUB'";
   $reg = mysqli_query($idCone, $Sql2) or die("Error en el Select2");   
   while ( $Fi = mysqli_fetch_array($reg) )
   {
	  $NOMRUB = $Fi['rub_nom'];
   }
   
   echo "<center><h3><u>Rubro seleccionado:</u> $NOMRUB</h3></center>";

   echo "<Table align='Center' width = '95%' border = '1'> ";
   echo "<tr align='Center'> ";
     echo "<th>" . "Código";
     echo "<th>" . "Descripción";
     echo "<th>" . "Precio unitario ($)";
	 echo "<th>" . "Stock (unidades)";
	 echo "<th>" . "Valor total del Stock ($)";
	 echo "<th>" . "Foto";     
     echo "<th>" . "Editar";
	 echo "<th>" . "4";
   echo "</tr>";
   
   $T=0;
   
   while ( $Fila = mysqli_fetch_array($registros) )
   {
	   $C = $Fila['art_cod'];
	   $D = $Fila['art_des'];
	   $P = $Fila['art_pre'];
	   $S = $Fila['art_sto'];
       $V = $P*$S;
       $T=$T+$V;
	   $F = $Fila['art_fot'];
	   
	   echo "<tr>";
         echo "<td align='Center'>" . $C;
         echo "<td align='Center'>" . $D;
		 echo "<td align='Center'>" . $P;
		 echo "<td align='Center'>" . $S;
         echo "<td align='Center'>" . $V;
       
	     echo "<td align='Center'>";
	     echo "<img src='$F' height='50'>";         
		 
		 echo "<td align='Center'>";
		 echo "<a Href='Editar1.php?Cx=$C'>";
         echo "<img src='img/edit.png' height='40'> ";
		 echo "</a> ";

		 echo "<td align='Center'>";
		 echo "<a Href=javascript:eliminar('Eliminar.php?Cx=$C')>";
         echo "<img src='img/papelera.png' height='50'> ";
		 echo "</a> ";
		 
	   echo "</tr>";   
   }
    echo "</Table>";    
    
    echo "<br><center><h3>Importe total del stock del rubro $NOMRUB: $$T</h3></center>";
    
    mysqli_close($idCone);
  ?>

<br><br>
<Center>

<Form Action="ConsultaRub1.Php" Method = "Post">
<Input Type = "Submit" value="  Realizar otra consulta por rubro  "><Br><Br><br><hr>
 </Form>
 
   </Td>  
 </Tr>
</Table>

<br><br>
<Center>

<Form Action="Main.Php" Method = "Post">
<Input Type = "Submit" value="  Regresar al menú Principal  ">
 </Form>
 
</Body>