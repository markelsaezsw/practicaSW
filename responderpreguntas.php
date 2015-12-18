<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<head>
    <meta name="Responder preguntas" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Responder preguntas</title>
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
  XMLHttpRequest1.open("GET", "preguntasaresponder.php");
  XMLHttpRequest1.send(null);
}

function enviarrespuesta() {
  var I = document.getElementById("Identificador").value;
  var R = document.getElementById("Respuesta").value;

  XMLHttpRequest1.open("POST", "verificarrespuesta.php", true);
  XMLHttpRequest1.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  XMLHttpRequest1.send("Identificador="+I+"&Respuesta="+R);

  
}

function variablesnombre() {
  var N = document.getElementById("nombrescore").value;

  XMLHttpRequest1.open("POST", "iniciarnick.php", true);
  XMLHttpRequest1.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  XMLHttpRequest1.send("Nombre="+N);

  
}


</script>
  </head>
<body>
  <div id='resultados'>
	<header class='main' id='h1'>
		<span class="right"><a href="layout.php">Volver al inicio</a></span>
      		
    </header>
    <section class="main" id="s1">
	
	<div>

<form id='resultados' name='resultados' method="POST" action=""> 
		Introduce un id para poder ver tus resultados(*):<br>
	<input type="text" name="nombrescore" id="nombrescore">
  <br>
<br>
   <input type=button value="Introducir nombre" onclick="variablesnombre()"> <br>
</form>




</div>

<br><br><br>








	<form id='responder' name='responder' method="POST" action=""> 
		ID de la pregunta(*):<br>
	<input type="text" name="Identificador" id="Identificador">
  <br>
  Texto de respuesta(*):<br>
  <input type="text" name="Respuesta" id="Respuesta">
  <br>
<br>
  <input type=button value="Responder a la pregunta" onclick="enviarrespuesta()"> <br>
   <a href="#" onClick="verpreguntas()">Ver Preguntas</a>




<div id="preguntas">
      </div>

</form>


</form>
	</div>
    </section>
	
	 
</div>
</body>
</HTML>																				