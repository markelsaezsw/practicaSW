<?php 
$mysqli = new mysqli ("mysql.hostinger.es", "u645169209_mark", "12345678", "u645169209_quiz");
$Preguntas= $mysqli->query("select * from Preguntas");
echo'<table border = 1> 
<tr> 
<th> Pregunta </th> 
<th> Complejidad </th>

</tr>';

while ($row = $Preguntas -> fetch_object()){
    echo '<tr>

    <td>'. $row -> Pregunta . '</td> 
    <td>'. $row -> Complejidad . '</td> 
    </tr>';
}

echo '</table>';
$Preguntas-> close();
$mysqli -> close();

?>