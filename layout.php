<?php
	session_start();
	$_usuario = $_SESSION['Email'];
        $profesor = $_SESSION['Profesor'];

?>


<!DOCTYPE html>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Preguntas</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
  </head>
  <body>
  <div id='page-wrap'>
	<header class='main' id='h1'>
<?php if($profesor == 0) { ?>
		<span class="right"><a href="registro.html">Registrarse</a></span>
      		<span class="right"><a href="login.html">Login</a></span>
                <span class="right"><a href="contrasena.html">Olvidaste tu contrasena?</a></span>  <br>
      		
<?php } ?>
<?php if($profesor != 0) { ?>
<span class="right"><a href="logout.php">Logout</a></span>
<?php } ?>


                
		<h2>Quiz: el juego de las preguntas</h2>
    </header>
	<nav class='main' id='n1' role='navigation'>
		<span><a href='layout.php'>Inicio</a></spam>
<?php if($profesor == 0) { ?>
                 <span><a href='responderpreguntas.php'>Responder Preguntas</a></spam>
<?php } ?>
<?php if($profesor == 2) { ?>
                  <span><a href='gestionpreguntas.php'>Gestionar preguntas</a></spam>
<?php } ?>
<?php if($profesor == 1) { ?>
                   <span><a href='revisar.php'>Revisar preguntas y usuarios</a></spam>
<?php } ?>
		<span><a href='creditos.html'>Creditos</a></spam>
		
	</nav>
    <section class="main" id="s1">
    
	<div>
	¡Haz click en un enlace para comenzar!
	</div>
    </section>
	<footer class='main' id='f1'>
		<p><a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a></p> <br>
		<a href='https://github.com/markelsaezsw'>Link GITHUB Markel</a>
	</footer>
	 
</div>
</body>
</html>

