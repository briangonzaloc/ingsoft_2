<html>
	<head>
			<title>Iniciar Sesion</title>
			<link type="text/css" rel="stylesheet" href="estilos.css">

	</head>
	
	<body background-color="#F5F6CE";>
		<?php
			include ("menucouch.php");
			include("conectar.php");
			
					
			if(isset($_GET['error'])){
				echo $_GET['error'];
			}
	
			
		?>
	<div class="login">	
		<form name="input" action="iniciar.php" method="post"></br>
  			Usuario:<input type="text" name="user"></br>
  			Contrasena:<input type="password" name="pass"></br>
 	 		<input class="input" type="submit" value="Iniciar Sesion">
		</form>
	</div>

	</body>
</html>