<html>
	<head>
			<title>Iniciar Sesion</title>
			<link type="text/css" rel="stylesheet" href="estilos.css">

	</head>
	
	<body background-color="#F5F6CE";>
		<?php
			
			session_start();
			include ("conectar.php");
			include("menucouch2");
			if ($_SESSION['estado'] != "logeado") {
  				header("Location: login.php");
			}
			
		
			
		?>
	<div class="login">	
		<form name="input" action="adentro.php" method="get"></br>
  			Contrasena actual:<input type="password" name="actual"></br>
  			Contrasena nueva:<input type="password" name="contrasena"></br>
  			Repita la contrasena nueva:<input type="password" name="contrasena2"></br>
 	 		<input class="input" type="submit" value="Cambiar ">
		</form>
	</div>

	</body>
</html>