<?php

$mysqli = new mysqli("mysql.hostinger.es", "u645169209_mark", "12345678", "u645169209_quiz");


$resultado = "SELECT Correo, Password FROM Usuarios WHERE Correo = '$_POST[Email]' AND Password = '$_POST[Contrasena]'";
session_start(); 
$_SESSION['myvar'] = $_POST[Email];

if($mysqli->query($resultado)->num_rows===0)
{
echo 'Usuario o contraseña incorrectos';
header("Location: http://markelsaezsw.esy.es/SistemasWeb/login.html");


}
else{
session_start();
$_SESSION['Email'] = $_POST[Email];
header("Location: http://markelsaezsw.esy.es/SistemasWeb/preguntas.html");
}
  
?>















