<html>
	<head>
			<title>Iniciar Sesion</title>
			<link type="text/css" rel="stylesheet" href="estilos.css">
						<SCRIPT type="text/javascript" src="funciones.js">
			</SCRIPT>

	</head>
	
	<body background-color="#F5F6CE";>
		<?php
			include ("menucouch.php");
			include("conectar.php");
			
					

	
			
		?>
	<div class="fondo2">
	<div class="login">	
		<?php 
			if(isset($_GET['error'])){
				echo '<img src="./imagenes/error.png" width="20px" height="20px">';
				echo $_GET['error'];
			}
		?></br>
		Para iniciar sesion ingrese su nombre de usuario y contrase&ntilde;a:
		
		<form name="input" action="iniciar.php" method="post" onsubmit="return validar_login()"></br>
  			Usuario:</br><input type="text" id="user"  name="user"></br>
  			Contrasena:</br><input type="password" id="pass" name="pass"></br>
 	 		<input class="input" type="submit" value="Iniciar Sesion">
		</form>
	</div>
	</div>

	</body>
</html>