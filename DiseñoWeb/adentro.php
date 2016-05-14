<html>
	<head>
			<title>Couch Inn</title>
			<link type="text/css" rel="stylesheet" href="estilos.css">

	</head>
	
	<body>
		<?php
			
			session_start();
			include ("conectar.php");

		
			if ($_SESSION['estado'] != "logeado") {
  				header("Location: login.php");
			}
			
		
			
		?>
		
		<div>
			<p class="adentro">Bienvenido <?php echo $_POST["usuario"];?> </p>
			<form><a class="input3" href="servip.php">$$$ Convertirse en usuario VIP $$$</a></form>
		</div>
	
	</body>
</html>