<?php
$mysqli = new mysqli("mysql.hostinger.es", "u645169209_mark", "12345678", "u645169209_quiz");
session_start();
$mail = $_SESSION['Email'];
   $profesor = $_SESSION['Profesor'];


$resultado = $mysqli->query("SELECT * FROM Preguntas");

echo'<table border = 1> 
<tr> 
<th> Numero </th> 
<th> Tema </th> 
<th> Pregunta </th>
<th> Complejidad </th>

</tr>';

while ($row = $resultado -> fetch_object()){
    echo '<tr>
    <td>'. $row -> Numero . '</td> 
    <td>'. $row -> Subject . '</td> 
    <td>'. $row -> Pregunta . '</td> 
    <td>'. $row -> Complejidad . '</td> 
    </tr>';
}

echo '</table>';
$resultado-> close();
$mysqli -> close();


?>