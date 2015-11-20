<?php
$mysqli = new mysqli("mysql.hostinger.es", "u645169209_mark", "12345678", "u645169209_quiz");
session_start();
$mail = $_SESSION['Email'];
   $profesor = $_SESSION['Profesor'];
       
        if($profesor != 1) {
        die("Acceso restringido. Solo los profesores pueden acceder a esta pagina.");
           }


$resultado = $mysqli->query("SELECT * FROM Preguntas");

echo'<table border = 1> 
<tr> 
<th> Numero </th> 
<th> Tema </th> 
<th> Pregunta </th>
<th> Respuesta </th> 
<th> Complejidad </th>
<th> Email </th> 

</tr>';

while ($row = $resultado -> fetch_object()){
    echo '<tr>
    <td>'. $row -> Numero . '</td> 
    <td>'. $row -> Subject . '</td> 
    <td>'. $row -> Pregunta . '</td> 
    <td>'. $row -> Respuesta . '</td> 
    <td>'. $row -> Complejidad . '</td> 
    <td>'. $row -> Email . '</td> 
    </tr>';
}

echo '</table>';
$resultado-> close();
$mysqli -> close();


?>