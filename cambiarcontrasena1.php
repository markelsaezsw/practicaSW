<?php
session_start();
$_SESSION['Email'] = $_GET["Correo"];
$_SESSION['Contravieja'] = $_GET["Contrasena"];
?>



<form id='cambiarc' name='cambiarc' onSubmit="return verificar()" method="POST" action="cambiarcontrasena2.php"> 

<script>
function verificar(){
 var sAux="";
 var frm = document.getElementById("lacontrasena");
 var b = true;

 
	if(frm.value === "")
	{
		sAux="Error. El campo " + frm.elements[i].name + " no puede estar vacio. \n";
		b = false;
		break;
	
	}else if (frm..value.length < 6) 
	{
	 	sAux="Error. La contrasena debe tener mas de 6 caracteres. \n";
		b = false;
		break;
		
	}else if (!frm.value.match(/\d/))
	{
        	sAux="Error. La contrasena debe contener al menos un numero. \n";
		b = false;
		break;
	}else
        sAux="Contrasena correcta. \n";
	}
 
 alert(sAux);
 return b;
 }
</script>
  Nueva contrasena (*):<br>
  <input type="password" id="lacontrasena" name="lacontrasena">
  <br>

<br>
  <input type="submit" value="Cambiar Contrasena"> <br>
  
  <span class="right"><a href="layout.html">Pagina Inicio</a></span>
</form>	