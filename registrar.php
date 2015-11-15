<?php

$mysqli = new mysqli("mysql.hostinger.es", "u645169209_mark", "12345678", "u645169209_quiz");


require_once('lib/nusoap.php');
require_once('lib/class.wsdlcache.php');

$soapclient = new nusoap_client( 'http://sw14.hol.es/ServiciosWeb/comprobarmatricula.php?wsdl', false);
$result = $soapclient->call('comprobar', array('x'=>$_POST['Correo']));
if($result == "NO") {
	echo "<p> <a href='registro.html'> Volver al registro </a>";
die('Error: El email es incorrecto. No esta entre los matriculados.' . $mysqli->error); 
}

$soapclient2 = new nusoap_client( 'http://markelsaezsw.esy.es/SistemasWeb/comprobarcontrasena.php?wsdl', false);
$result2 = $soapclient2->call('comprobarcontrasena', array('x'=>$_POST['Password']));
if($result2 == "INVALIDA") {
	echo "<p> <a href='registro.html'> Volver al registro </a>";
die('Error: La contrasena es poco segura.' . $mysqli->error); 
}

if (filter_var($_POST[Correo], FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z]+\d{3}@ikasle.ehu(.es|.eus)$/")))=== false) {
	echo "<p> <a href='registro.html'> Volver al registro </a>";
  die('Error: El email es incorrecto. No cumple con el formato adecuado. ' . $mysqli->error); 


} else {
 $sql = $sql = "INSERT INTO `u645169209_quiz`.`Usuarios` (`NombreApellidos`, `Correo`, `Password`, `Telefono`, `Especialidad`, `Tecnologias`) VALUES ('$_POST[NombreyApellidos]', '$_POST[Correo]', '$_POST[Password]', '$_POST[Telefono]', '$_POST[Especialidad]', '$_POST[Interes]' )";
}

if (!$mysqli->query($sql))
{
die('Error al introducir el usuario ' . $mysqli->error); 
}

echo "1 record added";
echo "<p> <a href='VerUsuarios.php'> Ver usuarios </a>";
$mysqli->close();
 
?>