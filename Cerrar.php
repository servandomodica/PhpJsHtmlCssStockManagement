<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="Estilos.Css"/>
<link rel="icon" href="img/favicon.png" sizes="any" type="image/svg+xml">
<title>Cierre de sesión</title>
</head>

<?Php
session_start();
?>

<Body>


<Table align="Center" width="40%">
 <Tr>
  <Td>

<Br><Br><Center> <H1> Cierre de sesión </H1>
<Br><Hr>

<Br><Br>

<?Php
 session_destroy();
?>

<Center> <h2> La sesión se cerró correctamente
<Br><Br><Br><hr><Br><Br>

<Form Action="Ingreso.html" Method = "Post">
<Input Type = "Submit" value="  Regresar al menú de Ingreso  ">
</Form>

  </Td>  
 </Tr>
</Table>

</Body>