<html>
	<head>
			<title>Modificar datos</title>
			<link type="text/css" rel="stylesheet" href="estilos.css">

	</head>
	
	<body background-color="#F5F6CE";>
		<?php
			
			session_start();
			include ("conectar.php");
			include ("menucouch2.php");
			
			if ($_SESSION['estado'] != "logeado") {
  				header("Location: login.php");
			}
			
		
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
  	
 	 		<input class="input" type="submit" value="Siguiente">
		</form>
	</div>
	 <a class="input" href="cambiarcontrasena.php">Cambiar contrasena</a>
	
	
	
	</body>
</html>