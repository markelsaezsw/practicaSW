
<?php
$mysqli = new mysqli("mysql.hostinger.es", "u645169209_mark", "12345678", "u645169209_quiz");
session_start();
$mail = $_SESSION['Email'];

$resultado = $mysqli->query("SELECT * FROM Preguntas WHERE Email = '". $mail . "'");

echo'<table border = 1> 
<tr> 
<th> Tema </th> 
<th> Pregunta </th>
<th> Complejidad </th>

</tr>';

while ($row = $resultado -> fetch_object()){
    echo '<tr>
    <td>'. $row -> Subject . '</td> 
    <td>'. $row -> Pregunta . '</td> 
    <td>'. $row -> Complejidad . '</td> 
    </tr>';
}

echo '</table>';
$resultado-> close();
$mysqli -> close();


?>
