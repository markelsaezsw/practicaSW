<?php 
$mysqli = new mysqli ("mysql.hostinger.es", "u645169209_mark", "12345678", "u645169209_quiz");
$usuarios = $mysqli->query("select * from Usuarios");
echo'<table border = 1> 
<tr> 
<th> Nombre y Apellidos </th> 
<th> Correo </th>
<th> Password </th>
<th> Telefono </th>
<th> Especialidad </th>
<th> Tecnologia </th>
</tr>';

while ($row = $usuarios -> fetch_object()){
    echo '<tr>
    <td>'. $row -> NombreApellidos . '</td> 
    <td>'. $row -> Correo . '</td> 
    <td>'. $row -> Password . '</td> 
    <td>'. $row -> Telefono . '</td>
    <td>'. $row -> Especialidad . '</td> 
    <td>'. $row -> Tecnologias . '</td> 
    </tr>';
}

echo '</table>';
$usuarios-> close();
$mysqli -> close();

?>