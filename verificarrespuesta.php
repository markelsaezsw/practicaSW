<?php

$mysqli = new mysqli("mysql.hostinger.es", "u645169209_mark", "12345678", "u645169209_quiz");
session_start();

       
    

$sql = "SELECT Respuesta FROM Preguntas WHERE Numero = '$_POST[Identificador]'"; 

if (!$mysqli->query($sql))
{
echo " La pregunta no se pudo introducir en la base de datos. <br/>";
die('Error: ' . $mysqli->error); 
}


$resp = $mysqli->query("SELECT Respuesta FROM Preguntas WHERE Numero = '$_POST[Identificador]'")->fetch_object()->Respuesta;


if($resp == $_POST[Respuesta] && !empty($_POST[Respuesta])){


	echo 'Respuesta correcta! ';
if(!empty($_SESSION['nombrescore'])){
    $_SESSION['aciertos'] = $_SESSION['aciertos'] +1;
echo 'Aciertos: ';
echo $_SESSION['aciertos'];
echo 'Fallos: ';
echo $_SESSION['fallos'];
}
}
else{ 
echo 'Respuesta incorrecta!';

if(!empty($_SESSION['nombrescore'])){
 $_SESSION['fallos'] = $_SESSION['fallos'] +1;
echo 'Aciertos: ';
echo $_SESSION['aciertos'];
echo 'Fallos: ';
echo $_SESSION['fallos'];
}
}


 


$mysqli->close();


 
?>	