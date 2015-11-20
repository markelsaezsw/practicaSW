<?php

$mysqli = new mysqli("mysql.hostinger.es", "u645169209_mark", "12345678", "u645169209_quiz");


$resultado = "SELECT Correo, Password, Profesor FROM Usuarios WHERE Correo = '$_POST[Email]' AND Password = '$_POST[Contrasena]'";
//session_start(); 
//$_SESSION['myvar'] = $_POST[Email];

if($mysqli->query($resultado)->num_rows===0)
{
echo 'Usuario o contraseña incorrectos';
header("Location: http://markelsaezsw.esy.es/SistemasWeb/login.html");
}
else{
$prof = $mysqli->query("SELECT Profesor FROM Usuarios WHERE Correo = '$_POST[Email]' AND Password = '$_POST[Contrasena]'")->fetch_object()->Profesor;  

if($prof == 1)
{
header("Location: http://markelsaezsw.esy.es/SistemasWeb/revisar.php");
}
else if ($prof == 2)
{

header("Location: http://markelsaezsw.esy.es/SistemasWeb/gestionpreguntas.php");

}
session_start();
$_SESSION['Email'] = $_POST[Email];
$_SESSION['Profesor'] = $prof;

}
  
?>















