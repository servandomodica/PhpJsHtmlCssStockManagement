<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="Estilos.Css"/>
<link rel="icon" href="img/favicon.png" sizes="any" type="image/svg+xml">
<title>Alta de artículo</title>
</head>

<Body>

<Table align="Center" width="40%">
 <Tr>
  <Td>
    <br><br><Center> <H1> Grabado del artículo </H1> </Center>
     <br><Hr>
     <br><br>
<?Php
 require "Conexion.php";
 $idCone = Conectar();
 
 $CODRUB = $_REQUEST['rub'];
 
 $D = $_REQUEST['des'];
 $P = $_REQUEST['pre'];
 $S = $_REQUEST['sto'];
 
 $F = $_FILES['fot']['name']; 
 copy($_FILES['fot']['tmp_name'], $F);
 
 $Sql = "insert into art (art_des, art_rub, art_pre, art_sto, art_fot) values ('$D', '$CODRUB', '$P', '$S', '$F')"; 
 mysqli_query($idCone, $Sql) or die("Error en la instruccion Insert");
 
 echo "<Center> <H2>";
 echo "El alta del artículo $D se grabó correctamente.";
 
 mysqli_close($idCone); 
?>

<br><br><br>
<Form Action="AltaArt1.Php" Method = "Post">
<Input Type = "Submit" value="  Realizar otra alta de artículo  "><Br><Br><br><hr>
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