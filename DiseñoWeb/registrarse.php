<html>
	<head>
			<title> Registrarse</title>
			<link type="text/css" rel="stylesheet" href="estilos.css">

	</head>
	
	<body background-color="#F5F6CE";>
		<?php
			include ("menucouch.php");
		?>
	<div class="registro" align="center">	
		<form name="input" action="form_action.php" method="get"></br>
  			Nombre: <input type="text" name="nombre"></br>
  			Apellido:<input type="text" name="apellido"></br>
  			Sexo:<select name="Seleccionar"></br>
  				<option value="Masculino"> Masculino</option></br>
  				<option value="Femenino">Femenino </option></br>

  			</select></br>
  			</br>Telefono:<input type="tel" name="telefono"></br>
  			Mail:<input type="email" name="mail"></br>
  			Usuario:<input type="text" name="usuario"></br>
  			Contrasena:<input type="password" name="contrasena"></br>
  			
 	 		<input class="input" type="submit" value="Siguiente">
		</form>

	
	<div>
	
	</body>
</html>