<?php
$mysqli = new mysqli("mysql.hostinger.es", "u645169209_mark", "12345678", "u645169209_quiz");
session_start();
$mail = $_SESSION['Email'];
   $profesor = $_SESSION['Profesor'];
       
        if($profesor != 2) {
        die("Acceso restringido. Solo los alumnos pueden acceder a esta pagina.");
           }

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
