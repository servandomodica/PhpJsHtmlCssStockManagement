<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="Estilos.Css"/>
<link rel="icon" href="img/favicon.png" sizes="any" type="image/svg+xml">
<title>Login</title>
</head>

<?Php
session_start();
?>

<Body>

<Table align="Center" width="40%">
 <Tr>
  <Td>
  
<Center><Br><Br> <H1> Ingreso de Usuario </H1>
<br><Br><Hr><br>
<h2><Center>

<?Php
  require("Conexion.php");
  $idCone= Conectar();
  
  $N = $_REQUEST['Nombre'];
  $C = $_REQUEST['Clave'];
  
  $Sql = "Select log_nom, log_cla from log where log_nom='$N' and log_cla='$C' ";
  
  $registro = mysqli_query($idCone, $Sql);
  
  if($Fila=mysqli_fetch_array($registro))
  {
	 $_SESSION['log_nom'] = $Fila['log_nom'];
	 echo '<Br>Su usuario y clave son correctos,<Br>';
	 echo 'ahora puede >> <a Href="Main.Php">ingresar al sitio</a> <<<Br><Br><Br><hr>';
  }
  else
  {
	  echo "<Br><u>Acceso denegado:</u><Br>";
	  echo "Su nombre y/o clave son incorrectos.<Br><Br>";      
      echo '<Form action="Login.Html" Method = "Post" ><Input type="Submit" value="  Reintentar ingreso  "></input></Form><Br><Br><hr>';
  }
  mysqli_close($idCone);
?>

<Br><Br>
<Form action="Ingreso.html" Method = "Post" >
<Input type="Submit" value="  Regresar al menú de Ingreso  ">
</input></Form>

  </Td>
 </Tr>
</Table>

</Body>