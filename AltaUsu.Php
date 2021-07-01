<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="Estilos.Css"/>
<link rel="icon" href="img/favicon.png" sizes="any" type="image/svg+xml">
<title>Alta de nuevo usuario</title>
</head>

<Body>



<Table align="Center" width="40%">
 <Tr>
  <Td>
  
<Br><Br><Center> <h1> Alta de Usuario </h1>
<Br><Br><Hr>

<?Php
  $N = $_REQUEST['Nombre'];
  $C1 = $_REQUEST['Clave1'];
  $C2 = $_REQUEST['Clave2'];
  
  function validar()
  {
   $b = 0;
   $leyenda="<Br>Alta de nuevo usuario NO realizada.<Br><u>Atención:</u><Br><Br>";
   $errores=$leyenda;
   
   if (empty($_REQUEST['Nombre']))
     $errores = $errores . "> Ingrese un nombre de usuario.<Br>";
   if (empty($_REQUEST['Clave1']))
     $errores = $errores . "> Ingrese la clave.<Br>";
   if (empty($_REQUEST['Clave2']))
     $errores = $errores . "> Ingrese la repetición de clave.<Br>";
   if ($_REQUEST['Clave1']!=$_REQUEST['Clave2'])
     $errores = $errores . "> Revise ambas claves ingresadas, deberán coincidir.<Br>";

   if ($errores!=$leyenda)
   {
	 $b=1;
     echo "<h2><Center>$errores";
	 echo '<Br><Br><Form action="AltaUsu.Html" Method = "Post" ><Input type="Submit" value="  Reintentar el alta de usuario  "></input></Form>';
	 echo '<Br><hr><Br><Br><Form action="Ingreso.html" Method = "Post" ><Input type="Submit" value="  Regresar al menú de Ingreso  "></input></Form>';
   }
  return $b;
  }
  
  
  if(validar()==0)
  {
	  require("Conexion.php");
	  $idCone = Conectar();
	  
	  $Sql = "Insert into log (log_nom, log_cla) values ('$N','$C1') ";
	  mysqli_query($idCone,$Sql);
	  
	  echo "<Br><Br><h2><Center> Los datos de usuario y clave se grabaron correctamente <Br><Br><Br>";
	  echo '<Form action="Ingreso.html" Method = "Post" ><Input type="Submit" value="  Regresar al menú de Ingreso  "></input></Form>';
	  
	  mysqli_close($idCone);
  }
?>

  </Td>
 </Tr>
</Table>

</Body>