<?php

$mysqli = new mysqli("mysql.hostinger.es", "u645169209_mark", "12345678", "u645169209_quiz");
session_start();
echo $_SESSION['Email'];
$out1 = ob_get_contents();

$sql = "INSERT INTO `u645169209_quiz`.`Preguntas` (`Pregunta`, `Respuesta`, `Complejidad`, `Email`,`Subject`) VALUES ('$_POST[Pregunta]','$_POST[Respuesta]', '$_POST[Dificultad]', '$out1', '$_POST[Subject]')";

if (!$mysqli->query($sql))
{
die('Error: ' . $mysqli->error); 
}
echo " added a question.";
echo "<p> <a href='VerPreguntas.php'> Ver preguntas </a>";
echo "<p> <a href='verPreguntasXML.php'> Ver preguntas en XML </a>";
echo "<p> <a href='preguntas.html'> Insertar otra pregunta </a>";
echo "<p> <a href='gestionpreguntas.php'> Gestionar preguntas </a>";


if (file_exists('preguntas.xml')) {
	
    $xml = simplexml_load_file('preguntas.xml');

    $xmlFormat = $xml->asXML();
	
   
    $assessmentItem = $xml->addChild('assessmentItem');
	$assessmentItem->addAttribute('complexity', $_POST[Dificultad]);
	$assessmentItem->addAttribute('subject', $_POST[Subject]);
	$itemBody = $assessmentItem->addChild('itemBody');
	$itemBody->addChild('p', $_POST[Pregunta]);
	$correctResponse = $assessmentItem->addChild('correctResponse');
	$correctResponse->addChild('value', $_POST[Pregunta]);
	
	file_put_contents('preguntas.xml', $xml->asXML());
	

} else {
    exit('Failed to open preguntas.xml.');
}
$mysqli->close();


 
?>