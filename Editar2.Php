<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="Estilos.Css"/>
<link rel="icon" href="img/favicon.png" sizes="any" type="image/svg+xml">
<title>Editar artículo</title>
</head>

<Body>

<Table align="Center" width="40%">
 <Tr>
  <Td>
     <br><br><H1> <Center> Edición de artículo </Center> </H1>
     <br><Hr>
     <br><br>

<?Php
   require "Conexion.php";
   $idCone = Conectar();
   
   $CODART = $_REQUEST['cod'];
   
   $CODRUB = $_REQUEST['rub'];
   
   $D = $_REQUEST['des'];
   $P = $_REQUEST['pre'];
   $S = $_REQUEST['sto'];

   $Sql1 = "Select art_fot from art where art_cod='$CODART'";
   $registro = mysqli_query($idCone, $Sql1) or die("Error en el Sql 1");   
   if( $Fila = mysqli_fetch_array($registro) )
   { 
     $F = $Fila['art_fot'];
	 unlink($F);
   }
    
   $F = $_FILES['fot']['name'];    
   copy($_FILES['fot']['tmp_name'], $F);
   
   $Sql = "Update art set art_des='$D', art_rub='$CODRUB', art_pre='$P', art_sto='$S', art_fot='$F' where art_cod='$CODART'";
   mysqli_query($idCone, $Sql) or die ("Error en el Update");

   echo " <Center> <H2> El registro para el artículo con código $CODART se editó correctamente<Br><Br><Br><hr>";

   mysqli_close($idCone);
?>

  </Td>
 </Tr>
</Table>

<br><br>
<Center>
 
<Form Action="Main.Php" Method = "Post">
<Input Type = "Submit" value="  Regresar al menú Principal  ">
 </Form> 
 
</Body>