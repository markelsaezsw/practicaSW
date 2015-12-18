<?php
session_start();
$mail = $_SESSION['Email'];
$contra = $_SESSION['Contravieja'];

$mysqli = new mysqli("mysql.hostinger.es", "u645169209_mark", "12345678", "u645169209_quiz");

$resultado = "SELECT Correo FROM Usuarios WHERE Correo = '$mail' AND Password = '$contra'";

if($mysqli->query($resultado)->num_rows===0)
{
echo 'Usuario o contraseña incorrectos';
}
else{
$usuario = $mysqli->query("SELECT Correo FROM Usuarios WHERE Correo = '$mail' AND Password = '$contra'")->fetch_object()->Correo;  
$pass= sha1($_POST[lacontrasena]);
$sql = "UPDATE `u645169209_quiz`.`Usuarios` SET Password='$pass' WHERE Correo='$usuario'";

if (!$mysqli->query($sql))
{
echo " No se pudo cambiar la contrasena. <br/>";
die('Error: ' . $mysqli->error); 
}
echo "La contrasena se ha cambiado correctamente. <br/>"; 
echo "<p> <a href='login.html'> Volver al login </a>";
}

 


$mysqli->close();







?>