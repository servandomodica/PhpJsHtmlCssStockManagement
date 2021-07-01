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
   <Form Action="ActPrRub2.php" Method="Post" enctype="multipart/form-data">
   <Br><Br><H1> <Center> Actualización de precios por rubro </Center> </H1>
   <Br><Hr>
   <Br><Br>
   
   <H3><Center>
      <select name="rub">
      <?php
         require("Conexion.php");
         $idCone = Conectar();
                         
         $Sql = "select rub_cod, rub_nom from rub order by rub_nom asc";
         $registros = mysqli_query($idCone, $Sql) or die("Error en el Select");
         
         echo "<option value='' disabled selected='selected'>> SELECCIONE RUBRO <</option>";
         
         while ( $Fila = mysqli_fetch_array($registros) )
         {
         echo "<option value=".$Fila['rub_cod'].">" . $Fila['rub_nom'] . "</option>";
         }
         mysqli_close($idCone);
      ?>
      </select>
	  
	<Br><Br><Br>
	<Input type= "Text" size = "2" name="inc" placeholder="Valor de porcentaje a incrementar">%
	  
   
   <Br><Br><Br><Br>
   <Center><Input Type = "Submit" value="  Actualizar precios  "><Br><Br><br><hr>
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