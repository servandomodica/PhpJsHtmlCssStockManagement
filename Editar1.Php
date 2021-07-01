<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="Estilos.Css"/>
<link rel="icon" href="img/favicon.png" sizes="any" type="image/svg+xml">
<title>Editar artículo</title>
</head>

<Body>

<Br>
<Table align="Center" width="40%">
 <Tr>
  <Td>
   <?Php
      require "Conexion.php";
      $idCone = Conectar();
      
      $C = $_REQUEST['Cx'];      
      
      echo "$C";
      
      echo '<Form Action="Editar2.php" Method="Post" enctype="multipart/form-data">';
      echo '<H1> <Center> Edición de artículo </Center></H1> <Hr>';

      echo "<Center> <H2> Usted ha seleccionado el artículo con código $C para editarlo.<Br>Por favor confirme sus datos a continuación.";
      
      echo "<Br><H2><select name='rub'>";      
      $Sql = "select rub_cod, rub_nom from rub order by rub_nom asc";
      $registros = mysqli_query($idCone, $Sql) or die("Error en el Select");
      
      echo "<option value='' disabled selected='selected'>> CONFIRME RUBRO <</option>";
      
      while ( $Fila = mysqli_fetch_array($registros) )
      {
      echo "<option value=".$Fila['rub_cod'].">" . $Fila['rub_nom'] . "</option>";
      }      
      echo "</select>";      
      
      $Sql2 = "Select art_cod, art_des, art_pre, art_sto from art where art_cod='$C'";
      $reg = mysqli_query($idCone, $Sql2) or die ("Error en el Select2");
      $Fi=mysqli_fetch_array($reg);
      
      mysqli_close($idCone);
   ?>
   
   <Input type="Hidden" name="cod" value='<?Php echo $Fi['art_cod']; ?>'>
   
   <br><br>Reingrese descripción:<br><Input type='Text' size='50' name='des' value='<?Php echo $Fi['art_des']; ?>'>
   <br><br>Reingrese precio:<br>$<Input type='Text' size='10' name='pre' value='<?Php echo $Fi['art_pre']; ?>'>
   <br><br>Reingrese stock:<br><Input type='Text' size='10' name='sto' value='<?Php echo $Fi['art_sto']; ?>'>
   <br><br>Recargue foto:<br><Input type='File' name='fot'>
   
   <Br><Br><Br>
   <Center><Input Type = "Submit" value="  Grabar la edición del artículo  "><Br><Br><hr>
   </Form>
  </Td>
 </Tr>
</Table>

<Center> <br>

<Form Action="Main.Php" Method = "Post">
<Input Type = "Submit" value="  Regresar al menú Principal  ">
 </Form> 
 
</Body>