<html>
	<head>
			<title>Iniciar Sesion</title>
			<link type="text/css" rel="stylesheet" href="estilos.css">

	</head>
	
	<body background-color="#F5F6CE";>
		<?php
			include ("menucouch.php");
		?>
	<div class="login">	
		<form name="input" action="listado.php" method="get"></br>
  			Usuario:<input type="text" name="usuario"></br>
  			Contrasena:<input type="password" name="contrasena"></br>
 	 		<input class="input" type="submit" value="Iniciar Sesion">
		</form>
	</div>

	</body>
</html>