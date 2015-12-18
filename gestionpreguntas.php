<?php
	session_start();
	$_usuario = $_SESSION['Email'];
        $profesor = $_SESSION['Profesor'];
       
        if($profesor != 2) {
        die("Acceso restringido. Solo los alumnos pueden acceder a esta pagina.");
           }

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<head>
    <meta name="gestion_preguntas" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Gestion de Preguntas</title>
        <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
		   
		   
	   
<script src="http://code.jquery.com/jquery-1.4.4.min.js" type="text/javascript"></script>
<script>


function verpreguntas() {
jQuery.ajax({
		url: "preguntasusuario.php", 
		type: "POST",
		success:function(data){$('#preguntas').html(data);} // #preguntas es el nombre del div
	});

}

function modificarpreguntas() {
var P = document.getElementById("Pregunta").value;
  var R = document.getElementById("Respuesta").value;
  var S = document.getElementById("Subject").value;
  var C = document.getElementById("Complejidad").value;
jQuery.ajax({
		url: "modificarpregunta.php",
		type: "POST",
                data : { Pregunta : P, Respuesta : R, Subject : S, Complejidad : C},
		success:function(data){$('#preguntas').html(data);}
	});

}


</script>
  </head>
<body>
  <div id='page-wrap'>
	<header class='main' id='h1'>
		<span class="right"><a href="layout.php">Volver al inicio</a></span>
      		<span class="right" style="display:none;"><a href="/logout">Logout</a></span>
    </header>
    <section class="main" id="s1">
	
	<div>
	<form id='registro' name='registro' method="POST" action=""> 
		Texto de pregunta(*):<br>
	<input type="text" name="Pregunta" id="Pregunta">
  <br>
  Texto de respuesta(*):<br>
  <input type="text" name="Respuesta" id="Respuesta">
  <br>
	Complejidad(*):<br>
  <select name="Complejidad" id="Complejidad">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
   <option value="5">5</option>
</select>
  <br>
  Tema:<br>
  <input type="text" name="Subject" id="Subject">
  <br>
<br>
  <input type=button value="Insertar Nueva Pregunta" onclick="modificarpreguntas()"> <br>
   <a href="#" onClick="verpreguntas()">Ver Preguntas</a>
   <span class="right"><a href="logout.php">Logout</a></span>



<div id="preguntas">
      </div>

</form>


</form>
	</div>
    </section>
	
	 
</div>
</body>
</HTML>																												