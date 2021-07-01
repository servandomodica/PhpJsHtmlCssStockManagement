<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<?Php
 function Conectar()
  {
    $Host = "localhost";
	$Usuario= "root";
	$Clave="";
    $Base="ferre";
	
	$idCone= mysqli_connect($Host, $Usuario, $Clave, $Base);
    return $idCone;
  }
?>