
<?php
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<form id='registro' name='registro' onSubmit="return vervalores()" method="POST" action="registrar.php"> 
<head>
<script>

function vervalores(){
 var sAux="";
 var frm = document.getElementById("registro");
 var b = true;
 for (i=0;i<frm.elements.length;i++)
 {
 
	if(i != 5 && frm.elements[i].value === "")
	{
		sAux="Error. El campo " + frm.elements[i].name + " no puede estar vacio. \n";
		b = false;
		break;
	
	}else if (frm.elements[2].value.length < 6) 
	{
	 	sAux="Error. La contrasena debe tener mas de 6 caracteres. \n";
		b = false;
		break;
		

	}else if (!frm.elements[1].value.match(/^[a-zA-Z]+\d{3}@ikasle.ehu(.es|.eus)$/))
	{
        	sAux="Error. El correo electronico es incorrecto. \n";
		b = false;
		break;
		
	}else if (!frm.elements[3].value.match(/^[0-9]{9}$/))
	{
        	sAux="Error. El numero de telefono debe tener 9 digitos. \n";
		b = false;
		break;
		

	}else if (!frm.elements[0].value.match(/^[a-zA-Z]+[ ][a-zA-Z]+[ ][a-zA-Z]+$/))
	{
        	sAux="Error. El nombre de usuario debe contener nombre de pila y dos apellidos. (En caso de apellido compuesto, escribirlo sin espacios) \n";
		b = false;
		break;
	
	}else if (!frm.elements[2].value.match(/\d/))
	{
        	sAux="Error. La contrasena debe contener al menos un numero. \n";
		b = false;
		break;
	}else
	{
	 sAux += "NOMBRE: " + frm.elements[i].name + " ";
	 sAux += "VALOR: " + frm.elements[i].value + "\n" ;
	}
 }
 alert(sAux);
 return b;
 }
</script>

</head>
  
  
 <body>
  Nombre y apellidos (*):<br>
  <input type="text" name="NombreyApellidos">
  <br>

  Direccion de correo(*):<br>
  <input type="text" name="Correo">
  <br>

  Password(*):<br>
  <input type="text" name="Password">
  <br>

Numero de telefono(*):<br>
  <input type="text" name="Telefono">
  <br>

Especialidad(*):<br>
  <select name="Especialidad">
  <option value="Software">Software</option>
  <option value="Hardware">Hardware</option>
  <option value="Computacion">Computacion</option>
</select>
  <br>

Tecnologias y herramientas en las que esta interesado:<br>
  <input type="text" name="Interes">
  <br>

<br>
  <input type="submit" value="Submit"> <br>
  
  <span class="right"><a href="layout.html">Pagina Inicio</a></span>
</form>
</body>
</html>