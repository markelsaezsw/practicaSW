<?php
session_start();


$mysqli = new mysqli("mysql.hostinger.es", "u645169209_mark", "12345678", "u645169209_quiz");

$contra = sha1($_POST[Contrasena]);
$resultado = "SELECT Correo, Password, Profesor FROM Usuarios WHERE Correo = '$_POST[Email]' AND Password = '$contra'";

if($mysqli->query($resultado)->num_rows===0)
{
if($_SESSION['Intentos'] == 2)
{
$pass=sha1("bloqueo123");
$mysqli->query("UPDATE `u645169209_quiz`.`Usuarios` SET Password='$pass' WHERE Correo='$_POST[Email]'");
echo "Tu cuenta ha sido bloqueada. ";
echo "<p> <a href='contrasena.php'> Haz click aqui para verificar tu identidad. </a>";
die();

}
if($_SESSION['Intentos'] == 1)
{$_SESSION['Intentos'] = 2;}
if($_SESSION['Intentos'] != 2)
{$_SESSION['Intentos'] = 1;}

header("Location: http://markelsaezsw.esy.es/SistemasWeb/login.html");
}
else{
$prof = $mysqli->query("SELECT Profesor FROM Usuarios WHERE Correo = '$_POST[Email]' AND Password = '$contra'")->fetch_object()->Profesor;  


header("Location: http://markelsaezsw.esy.es/SistemasWeb/layout.php");


$_SESSION['Email'] = $_POST[Email];
$_SESSION['Profesor'] = $prof;

}
  
?>















