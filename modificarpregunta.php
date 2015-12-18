<?php

$mysqli = new mysqli("mysql.hostinger.es", "u645169209_mark", "12345678", "u645169209_quiz");
session_start();
echo $_SESSION['Email'];
$out1 = ob_get_contents();

$profesor = $_SESSION['Profesor'];
       
        if($profesor != 2) {
        die("Acceso restringido. Solo los alumnos pueden acceder a esta pagina.");
           }

$sql = "INSERT INTO `u645169209_quiz`.`Preguntas` (`Pregunta`, `Respuesta`, `Complejidad`, `Email`,`Subject`) VALUES ('$_POST[Pregunta]','$_POST[Respuesta]', '$_POST[Complejidad]', '$out1', '$_POST[Subject]')";

if (!$mysqli->query($sql))
{
echo "<br/> La pregunta no se pudo introducir en la base de datos. <br/>";
die('Error: ' . $mysqli->error); 
}
echo "<br/>La pregunta se anadio correctamente a la base de datos. <br/>"; 

if (file_exists('preguntas.xml')) {
	
    $xml = simplexml_load_file('preguntas.xml');

    $xmlFormat = $xml->asXML();
	
  
        $assessmentItem = $xml->addChild('assessmentItem');
	$assessmentItem->addAttribute('complexity', $_POST[Complejidad]);
	$assessmentItem->addAttribute('subject', $_POST[Subject]);
	$itemBody = $assessmentItem->addChild('itemBody');
	$itemBody->addChild('p', $_POST[Pregunta]);
	$correctResponse = $assessmentItem->addChild('correctResponse');
	$correctResponse->addChild('value', $_POST[Pregunta]);
	file_put_contents('preguntas.xml', $xml->asXML());
	
	echo "La pregunta se anadio correctamente al XML.<br/>"; 

} else {
    echo "La pregunta no se pudo anadir al XML.<br/>";
} 
$mysqli->close();


 
?>	