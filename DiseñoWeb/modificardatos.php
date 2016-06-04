<!DOCTYPE html>
<html lang="es">
	<head>
			<title>Modificar datos</title>
			<meta charset="utf-8"/>
			<link type="text/css" rel="stylesheet" href="estilos.css">
			<meta name="viewport" content="width=device-width,initial-scale=1"/>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	</head>
	
	<body background-color="#F5F6CE";>
			<?php
				
				session_start();
				include ("conectar.php");
			
				
				if ($_SESSION['estado'] != "logeado") {
	  				header("Location: login.php");
				}
				
				if(isset( $_SESSION['estado']) and ( $_SESSION['estado']== "logeado")){
					if($_SESSION['admin']==1)
						include("menucouch3.php");
					
					else
						if($_SESSION['admin']==0)
							include ("menucouch2.php");
						

				}
				
			?>
				
		<section class="contenedor-principal">		
				
			<div class="registro2" align="center">	
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
			
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<h4 class="text-center">Sistema Couch inn</h4>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p class="footer-parrafo">Marcelo Bufartanelo</p>
					</div>
					<div class="col-md-6">
						<ul class="list-inline text-right">
							<li><a href="index.php">Home</a></li>
							<li><a href="">Ayuda</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>	
	
	</body>
</html>