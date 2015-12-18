<?php
session_start();
  $_SESSION['nombrescore'] = $_POST['Nombre'];
    $_SESSION['aciertos'] = 0;
    $_SESSION['fallos'] = 0;
echo 'Nombre introducido! Responde a una pregunta para empezar a ver tus resultados';
?>