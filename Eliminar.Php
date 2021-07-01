<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="Estilos.Css"/>
<link rel="icon" href="img/favicon.png" sizes="any" type="image/svg+xml">
<title>Eliminar artículo</title>
</head>

<Body>

<Table align="Center" width="40%">
 <Tr>
  <Td>
   <br><br><H1> <Center> Eliminación de artículo </Center> </H1>
   <br><Hr>
   <?Php
   require "Conexion.php";
   $idCone = Conectar();
   
   $C = $_REQUEST['Cx'];
   $Sql1 = "Select art_des, art_fot from art where art_cod='$C'";
   $registro = mysqli_query($idCone, $Sql1) or die("Error en el Select1");
   
   if( $Fila = mysqli_fetch_array($registro) )
   { 
     $D = $Fila['art_des'];
     $F = $Fila['art_fot'];
	 unlink($F);
     
     $Sql2 = "Delete from art where art_cod='$C' ";
	 mysqli_query($idCone, $Sql2) or die("Error en el Select2");
     echo "<Br><Br><Center> <H2> ";
	 echo "El artículo $D se eliminó correctamente";
   }
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