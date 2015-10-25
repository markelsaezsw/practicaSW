<?php

$mysqli = new mysqli("mysql.hostinger.es", "u645169209_mark", "12345678", "u645169209_quiz");


if (filter_var($_POST[Correo], FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z]+\d{3}@ikasle.ehu(.es|.eus)$/")))=== false) {
  die('Error: El email es incorrecto ' . $mysqli->error); 
print('$_POST[Correo]');
} else {
 $sql = $sql = "INSERT INTO `u645169209_quiz`.`Usuarios` (`NombreApellidos`, `Correo`, `Password`, `Telefono`, `Especialidad`, `Tecnologias`) VALUES ('$_POST[NombreyApellidos]', '$_POST[Correo]', '$_POST[Password]', '$_POST[Telefono]', '$_POST[Especialidad]', '$_POST[Interes]' )";
}

if (!$mysqli->query($sql))
{
die('Error al introducir el usuario ' . $mysqli->error); 
}

echo "1 record added";
echo "<p> <a href='VerUsuarios.php'> Ver usuarios </a>";
$mysqli->close();
 
?>