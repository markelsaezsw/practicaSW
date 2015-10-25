<?php

$mysqli = new mysqli("mysql.hostinger.es", "u645169209_mark", "12345678", "u645169209_quiz");
session_start();
echo $_SESSION['Email'];
$out1 = ob_get_contents();

$sql = "INSERT INTO `u645169209_quiz`.`Preguntas` (`Pregunta`, `Respuesta`, `Complejidad`, `Email`) VALUES ('$_POST[Pregunta]','$_POST[Respuesta]', '$_POST[Dificultad]', '$out1')";

if (!$mysqli->query($sql))
{
die('Error: ' . $mysqli->error); 
}
echo " added a question.";
echo "<p> <a href='VerPreguntas.php'> Ver preguntas </a>";
echo "<p> <a href='preguntas.html'> Insertar otra pregunta </a>";
$mysqli->close();
 
?>