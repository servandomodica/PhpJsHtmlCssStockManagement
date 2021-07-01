<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="Estilos.Css"/>
<link rel="icon" href="img/favicon.png" sizes="any" type="image/svg+xml">
<title>Actualizar precios por rubro</title>
</head>

<Body>

<Table align="Center" width="40%">
 <Tr>
  <Td>
  <br><br>
     <H1> <Center> Actualización de precios por rubro </Center> </H1>
     <br><Hr>
     <br><br>
<?Php
   require "Conexion.php";
   $idCone = Conectar();
   
   $CODRUB = $_REQUEST['rub'];
   $I = $_REQUEST['inc'];
   
   $Z=1+($I*0.01);

   $Sql = "Update art set art_pre=art_pre*'$Z' where art_rub='$CODRUB'";
   mysqli_query($idCone, $Sql) or die ("Error en el Update");
   
   $Sql2 = "Select rub_nom from rub where rub_cod='$CODRUB'";
   $reg = mysqli_query($idCone, $Sql2) or die("Error en el Select");   
   while ( $Fi = mysqli_fetch_array($reg) )
   {
	  $NOMRUB = $Fi['rub_nom'];
   }

   echo " <Center> <H2> Los precios del rubro $NOMRUB<Br>se actualizaron correctamente,<Br>con un incremento del $I%";

   mysqli_close($idCone);
?>

<br><br><br>
<Center> 

<Form Action="ActPrRub1.Php" Method = "Post">
<Input Type = "Submit" value="  Actualizar precios de otro rubro  "><Br><Br><br><hr>
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