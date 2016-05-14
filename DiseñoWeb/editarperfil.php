<html>
	<head>
			<title>Editar perfil</title>
			<link type="text/css" rel="stylesheet" href="estilos.css">
			<SCRIPT type="text/javascript" src="funciones.js">
			</SCRIPT>
	</head>
	
	<body background-color="#F5F6CE";>
		<?php
			include ("menu2.php");
		?>
	<div class="registro" align="center">	
		<form action="adentro.php" name="input" method="get" onsubmit="return validar(this)"></br>
			<p class="texto1">Ingrese sus datos personales:</p>
  			Nombre: <input type="text" id="nombre"></br>
  			Apellido:<input type="text" id="apellido"></br>
  			Sexo:<select id="seleccionar"></br>
  				<option value="Masculino"> Masculino</option></br>
  				<option value="Femenino">Femenino </option></br>

  			</select></br>
  			Telefono:<input type="tel" id="telefono"></br>
  			Mail:<input type="email" id="mail"></br>
  			Contrasena anterior:<input type="password" id="contrasena"></br>
  			Contrasena nueva:<input type="password" id="contrasena"></br>
  			Repita la contrasena:<input type="password" id="contrasena"></br>

 	 		<input class="input" type="submit" value="Siguiente">
		</form>

	
	<div>
	
	</body>
</html>