<html>
	<head>
			<title>Modificar Categorias</title>
			<link type="text/css" rel="stylesheet" href="estilos.css">

	</head>
	
	<body background-color="#F5F6CE";>
	<?php
			
			session_start();
			include ("conectar.php");
			include ("menucouch3.php");

			if (($_SESSION['estado'] != "logeado") && ($_SESSION['administrador']!="1" )) {
  				header("Location: login.php");
			}
			

			
	?>
	<div class="registro" align="center">	
		<form name="input" action="publicaciones.php" method="get"></br>
  			Tipo:<select name="Seleccionar"></br>
  				<option value="cama">Cama</option></br>
  				<option value="sillon">Sillon</option></br>
  				<option value="carpa">Carpa </option></br>

  			</select></br>
  
  			
  			
 	 		<input class="input" type="submit" value="Modificar">
		</form>

	
	<div>
	
	</body>
</html>