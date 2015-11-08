<?php
	session_start();
	$_usuario = $_SESSION['Email'];
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
		   
		   
		   
<script>

var XMLHttpRequest1 = new XMLHttpRequest();

XMLHttpRequest1.onreadystatechange = function() {
  if(XMLHttpRequest1.readyState == 4)
  {
    var contenedor = document.getElementById("preguntas");
    contenedor.innerHTML = XMLHttpRequest1.responseText;
  }
}


function verpreguntas() {
  XMLHttpRequest1.open("GET", "preguntasusuario.php");
  XMLHttpRequest1.send(null);
}

function modificarpreguntas() {
  var P = document.getElementById("Pregunta").value;
  var R = document.getElementById("Respuesta").value;
  var S = document.getElementById("Subject").value;
  var C = document.getElementById("Complejidad").value;
  XMLHttpRequest1.open("POST", "modificarpregunta.php", true);
  XMLHttpRequest1.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  XMLHttpRequest1.send("Pregunta="+P+"&Respuesta="+R+"&Subject="+S+"&Complejidad="+C);

  
}


</script>
  </head>
<body>
  <div id='page-wrap'>
	<header class='main' id='h1'>
		<span class="right"><a href="layout.html">Volver al inicio</a></span>
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
   <li><a href="#" onClick="verpreguntas()">Ver Preguntas</a></li>
  <span class="right"><a href="layout.html">Pagina Inicio</a></span>


<div id="modificado">
      </div>
<div id="preguntas">
      </div>

</form>


</form>
	</div>
    </section>
	
	 
</div>
</body>
</HTML>																	