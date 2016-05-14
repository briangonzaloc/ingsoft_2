<html>
	<head>
			<title> Mis Couchs</title>
			<link type="text/css" rel="stylesheet" href="estilos.css">

	</head>
	
	<body>
		<?php
			session_start();
			include ("conectar.php");
			include ("menucouch2.php");
	
			if ($_SESSION['estado'] != "logeado") {
  				header("Location: login.php");
			}
			
		
		?>
				<h1>Mis Couchs:</h1>
		<hr />
		<div class="couch">
			<img src="./imagenes/barilo.jpg" width="300px" height="200px"></br>
			Provincia: Rio Negro</br>
			Ciudad: Bariloche</br>
			Tipo Couch: Cama</br>	
			Para 4 personas</br>	
		<form action="modificarcouch.php"><input class="input"  type="submit" value="Modificar">
		<form action="eliminarcouch.php"><input class="input" type="submit" value="Eliminar">
		</form>
		 	 		

		
		</div>
		</br>
		</br>
		<div class="couch">
			<img src="./imagenes/salta.jpg" width="300px" height="200px"></br>
			Provincia: Salta</br>
			Ciudad: Salta</br>
			Tipo Couch: Sillon</br>		
			Para 1 persona</br>		
		 	<form action="modificarcouch.php"><input class="input" type="submit" value="Modificar"> 
		 	<form action="eliminarcouch.php"><input class="input" type="submit" value="Eliminar">

		</div>
	
	</body>
</html>