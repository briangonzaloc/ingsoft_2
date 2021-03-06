<!DOCTYPE html>
<html lang="es">
	<head>
			<title>Publicar Couch</title>
			<meta charset="utf-8"/>
			<link type="text/css" rel="stylesheet" href="estilos.css">
			<meta name="viewport" content="width=device-width,initial-scale=1"/>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<SCRIPT type="text/javascript" src="funciones.js">
			</SCRIPT>

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
		<form name="input" action="agregar.php"  enctype="multipart/form-data"  method="post" onsubmit= "return validar_publicacion()">
  			<h4>Datos del Couch</h4>
  			Titulo de la publicaci&oacute;n: <input type="text" name="titulo" id="titulo"></br>
  			Descripcion: <textarea id="descripcion" name="descripcion" rows="4" cols="40" placeholder="Escriba aqui..."></textarea></br>
  		
  			Direccion:<input type="text" name="direccion" id="direccion"></br>
  			Cantidad de personas: <input type="text" name="cantidad"  id="cantidad"></br>
  			Ciudad:<select  id="ciudad" name="ciudad"></br>
  				<option>Seleccione</option></br>
  					<?php 
  					$result1= mysqli_query($link, "SELECT * FROM ciudad");
  					if($result1){
  						while($rows = mysqli_fetch_array($result1)){
  							echo '<option value="'.$rows["id_ciudad"]. '">'.$rows["ciudad"].'</option>';
  						}
  					}
  					?>

  			</select></br>
  			Categoria:<select name="categoria" id="categoria"></br>
  				<option>Seleccione</option></br>
  					<?php 
  					$result= mysqli_query($link, "SELECT * FROM categoria WHERE activo = 1");
  					if($result){
  						while($row = mysqli_fetch_array($result)){
  							echo '<option value="'.$row["id_categoria"]. '">'.$row["descripcion"].'</option>';
  						}
  					}
  					?>

  			</select></br>
  			
			Imagen: <input type="file" name="imagen" id="imagen"></br>
			<input type="hidden" name="tipo" id="tipo" value="JPEG"></br>

 	 		<input class="input" type="submit" value="Publicar">
		</form>

	
	<div>
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