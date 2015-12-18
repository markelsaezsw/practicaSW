<?php
$mysqli = new mysqli("mysql.hostinger.es", "u645169209_mark", "12345678", "u645169209_quiz");

$resultado = "SELECT Password FROM Usuarios WHERE Correo = '$_POST[Email]'";

if($mysqli->query($resultado)->num_rows===0)
{
echo 'Usuario incorrecto';
header("Location: http://markelsaezsw.esy.es/SistemasWeb/contrasena.html");
}
else{
 $contra = $mysqli->query("SELECT Password FROM Usuarios WHERE Correo = '$_POST[Email]'")->fetch_object()->Password;  

$link = "cambiarcontrasena1.php" . "?Contrasena=" . $contra . "&Correo=" . $_POST[Email];


$to      = $_POST[Email];
$subject = 'Recuperar contraseña';
$message = 'Aqui tienes el link para cambiar tu contrasena: http://markelsaezsw.esy.es/SistemasWeb/' . $link;
$headers = 'From: donotreply@appdepreguntas.com' . "\r\n" .
    'Reply-To: markelsaezsw@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
}

echo "Se te ha enviado un correo con un link para cambiar tu contrasena."


?>