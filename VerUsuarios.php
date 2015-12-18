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
<th> Foto </th>
</tr>';

while ($row = $usuarios -> fetch_object()){

$foto = $row-> Foto;
					
if ($foto == NULL) {
$imagen = 'foto.png';
} else {
$imagen = base64_encode($foto);
$imagen = 'data:image/png;base64,' . $imagen;
}

    echo '<tr>
    <td>'. $row -> NombreApellidos . '</td> 
    <td>'. $row -> Correo . '</td> 
    <td>'. $row -> Password . '</td> 
    <td>'. $row -> Telefono . '</td>
    <td>'. $row -> Especialidad . '</td> 
    <td>'. $row -> Tecnologias . '</td>
 <td>'. "<img src='$imagen' width=60>" . '</td> 
     </tr>';


    
}

echo '</table>';
$usuarios-> close();
$mysqli -> close();

?>