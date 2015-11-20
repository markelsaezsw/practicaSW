<?php

$mysqli = new mysqli("mysql.hostinger.es", "u645169209_mark", "12345678", "u645169209_quiz");
session_start();
echo $_SESSION['Email'];
$profesor = $_SESSION['Profesor'];
       
        if($profesor != 1) {
        die("Acceso restringido. Solo los profesores pueden acceder a esta pagina.");
           }

$sql = "UPDATE `u645169209_quiz`.`Preguntas` SET Pregunta='$_POST[Pregunta]', Respuesta= '$_POST[Respuesta]', Subject= '$_POST[Subject]', Complejidad='$_POST[Complejidad]' WHERE Numero='$_POST[Numero]'";

if (!$mysqli->query($sql))
{
echo " La pregunta no se pudo introducir en la base de datos. <br/>";
die('Error: ' . $mysqli->error); 
}
echo "La pregunta se ha modificado correctamente. <br/>"; 


 


$mysqli->close();


 
?>	