<html>
	<head>
			<title> Couch Inn</title>
			<link type="text/css" rel="stylesheet" href="estilos.css">

	</head>	
	<body>
		<?php
			session_start();
			include("conectar.php");
			if(isset( $_SESSION['estado']) and ( $_SESSION['estado']== "logeado")){
				include ("menucouch2.php");
			}else{
				include ("menucouch.php");
			}
		?>
		
		
		<h1>Bariloche</h1>
		<h1>Rio Negro - Argentina </h1>
		
			
			<div class="detalleco">	
			<img src="./imagenes/barilo.jpg" width="850px" height="400px">
				<p>Detalle del Couch: adfaddadf<p>
				<p>Ano: 2016</p>
				<p>Fecha de publicacion: 1/1/2016</p>
				<p>Fecha de caducidad: 26/6/2016</p>
				
						<form action="reservar.php"><input class="input"  type="submit" value="Realizar reserva"></form>

			</div>
		<hr />
		<h3>Valoracion:</h3>
		</p> 1/5</p>
		
		<hr />
		<h3>Comentarios:</h3>
	
		
			
			<div class="comentario">	
				<p>	El couch me parecio buenisimo </p>
				

			</div>
	
	
	
	</body>
</html>