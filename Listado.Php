<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="Estilos.Css"/>
<link rel="icon" href="img/favicon.png" sizes="any" type="image/svg+xml">
<title>Listado de artículos</title>
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

<Body>

<br><br>
<Table align="Center" width="60%">
 <Tr>
  <Td>
   <H1> <Center> Listado de artículos ordenado por descripción </Center> </H1> <Hr>
   <br>
   <?Php
   require "Conexion.php";
   $idCone = Conectar();
   
   $Sql1 = "select Artic.art_cod, art_des, Rubro.rub_nom, art_pre, art_sto, art_fot from art as Artic join rub as Rubro on Artic.art_rub  = Rubro.rub_cod order by art_des";
   $registros = mysqli_query($idCone, $Sql1) or die("Error en el Select1");

   echo "<Table align='Center' width='95%' border='1'> ";
   echo "<tr align='Center'> ";
     echo "<th>" . "Código" . "</th>";
     echo "<th>" . "Descripción" . "</th>";
     echo "<th>" . "Rubro" . "</th>";
     echo "<th>" . "Precio unitario ($)" . "</th>";
	 echo "<th>" . "Stock (unidades)" . "</th>";
	 echo "<th>" . "Valor total del Stock ($)" . "</th>";
	 echo "<th>" . "Foto" . "</th>";
     echo "<th>" . "Editar" . "</th>";
	 echo "<th>" . "Eliminar" . "</th>";
   echo "</tr>";
   
   $T=0;
   
   while ( $Fila = mysqli_fetch_array($registros) )
   {
	   $C = $Fila['art_cod'];
	   $D = $Fila['art_des'];
	   $R = $Fila['rub_nom'];
	   $P = $Fila['art_pre'];
	   $S = $Fila['art_sto'];
	   $V = $P*$S;
	   $T=$T+$V;
	   $F = $Fila['art_fot'];
	   
	   echo "<tr>";
	   
         echo "<td align='Center'>" . $C . "</td>";
         echo "<td align='Center'>" . $D . "</td>";
		 echo "<td align='Center'>" . $R . "</td>";
		 echo "<td align='Center'>" . $P . "</td>";
		 echo "<td align='Center'>" . $S . "</td>";
		 echo "<td align='Center'>" . $V . "</td>";
       
	     echo "<td align='Center'>";
	     echo "<img src='$F' height='50'>" . "</td>";
		 
		 echo "<td align='Center'>";
		 echo "<a Href='Editar1.php?Cx=$C'>";
         echo "<img src='img/edit.png' height='40'> ";
		 echo "</a> " . "</td>";

		 echo "<td align='Center'>";
		 echo "<a Href=javascript:eliminar('Eliminar.php?Cx=$C')>";
         echo "<img src='img/papelera.png' height='50'> ";
		 echo "</a> " . "</td>";
		 
	   echo "</tr>";
   }
    echo "</Table>";
	
	echo "<br><center><h3>Importe total de todos los artículos en stock: $$T</h3></center>";	
	
    mysqli_close($idCone);
  ?>
  </Td>  
 </Tr>
</Table>  

<Center> <br><br>
<Form Action="Main.Php" Method = "Post">
<Input Type = "Submit" value="  Regresar al menú Principal  ">
 </Form>
 
</Body>