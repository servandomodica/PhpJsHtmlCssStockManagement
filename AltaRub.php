<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="Estilos.Css"/>
<link rel="icon" href="img/favicon.png" sizes="any" type="image/svg+xml">
<title>Alta de rubro</title>
</head>

<Body>

<Table align="Center" width="40%">
 <Tr>
  <Td>
  <Br><Br><H1><Center> Alta de rubro </Center> </H1>
  <Br><Hr>
  <Br><Br>

<?Php
 $N = $_REQUEST['Nombre'];

  function validar()
  {
   $b = 0;
   $leyenda="Alta de nuevo rubro NO realizada.<Br><u>Atención:</u><Br><Br>";
   $errores=$leyenda;
   
   if (empty($_REQUEST['Nombre']))
     $errores = $errores . "> Ingrese un nombre de rubro.";

   if ($errores!=$leyenda)
   {
	 $b=1;
     echo "<h2><Center>$errores";	 
   }
  return $b;
  }

  if(validar()==0)
  {
   require("Conexion.php");
   $idCone = Conectar();
   
   $Sql = "Insert into rub (rub_nom) values ('$N') ";
           
   echo "<br> <H2> <Center> "; 
   if ( mysqli_query($idCone,$Sql) )
       echo "El alta del rubro $N se grabó correctamente";
   else
   {
      echo "<Font Color='#FF0000'>";
      echo "No se pudo grabar el alta del rubro $N";
   }
   mysqli_close($idCone);
  }
?>

<Br><Br><Br>
<Form action="AltaRub.Html" Method = "Post">
<Input type="Submit" value="  Regresar a alta de nuevo rubro  "><Br><Br><br><hr>
</Form>
  </Td>  
 </Tr>
</Table>

<br><br>
<Center> 

<Form action="Main.Php" Method = "Post">
<Input type="Submit" value="  Regresar al menú Principal  ">
</Form>

</Body>