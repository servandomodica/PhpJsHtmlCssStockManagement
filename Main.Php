<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="Estilos.Css"/>
<link rel="icon" href="img/favicon.png" sizes="any" type="image/svg+xml"/>
<title>Menú Principal</title>
</head>

<script>
function cierre(webdestino)
{
if(confirm("¿Confirma el cierre de sesión?"))
{
location=webdestino;
}
else
alert("Cierre de sesión desestimado");
}
</script>

<Body>

<Br>

<Table align="Center" width="40%">
 <Tr>
  <Td>

<?Php
session_start();

  if(!isset($_SESSION['log_nom']))
  {
	 echo "<Br><Br><Br><Br><Br><Br><Br><Br>";
	 die ('<Center><H1>Por favor debe logearse para ingresar al sitio</H1><Br><Br> <H2> <Form action="Ingreso.html" Method = "Post" ><Input type="Submit" value="  Regresar al menú de Ingreso  "></input></Form> </H2>');
  }
?>
<Hr>
<Center> <H1> Sitio de Ferretería Módica </H1>


<?Php
  echo "<H2> ¡Benvenido, $_SESSION[log_nom]! </H2>";
?>
<Hr>
<Br>

<Form action="AltaRub.Html" Method = "Post" >
<Input type="Submit" value="  Alta de rubro  "></input>
</Form>
<Br>

<Form action="AltaArt1.Php" Method = "Post">
<Input type="Submit" value="  Alta de artículo  "></input>
</Form>
<Br>

<Form action="Listado.Php" Method = "Post">
<Input type="Submit" value="  Listado de artículos  "></input>
</Form>
<Br>

<Form action="ConsultaRub1.Php" Method = "Post">
<Input type="Submit" value="  Consulta por rubro  "></input>
</Form>
<Br>

<Form action="ActPrRub1.Php" Method = "Post">
<Input type="Submit" value="  Actualización de precios por rubro  "></input>
</Form>
<Br>

<Hr>
<Br>
<Form action="Alumno.Html" Method = "Post">
<Input type="Submit" value="  Datos del alumno desarrollador  "  id="help"></input>
</Form>
<Br>

<Hr>
<Br>
<Form action="javascript:cierre('Cerrar.Php')" Method="Post">
<Input type="Submit" value="  Cerrar sesión  "  id="close"></input>
</Form>
<Br>

<Hr>

</Center>

  </Td>
 </Tr>
</Table>

</Body>