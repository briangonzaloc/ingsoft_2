<!DOCTYPE html>
<html lang="es">
	<head>
			<title> Couch Inn</title>
			<meta charset="utf-8"/>
			<link type="text/css" rel="stylesheet" href="estilos.css">
			<meta name="viewport" content="width=device-width,initial-scale=1"/>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	</head>	
	<body>
		<?php
			session_start();
			include("conectar.php");

			if(isset( $_SESSION['estado']) and ( $_SESSION['estado']== "logeado")){
				if($_SESSION['admin']==1)
					include("menucouch3.php");
				
				else{
					if($_SESSION['admin']==0)
						include ("menucouch2.php");
				}
			}		
			else
				include ("menucouch.php");
			
			
		
			
			
		
		
		$id=$_GET['id_couch'];
		
		
		$consulta= "SELECT * FROM couch WHERE id_couch ='".$id."'";
		$resul=mysqli_query($link, $consulta);
		if($resul){
			$rows=mysqli_fetch_array($resul);
			$consulta2="SELECT * FROM ciudad WHERE id_ciudad='".$rows['id_ciudad']."'";
			$resul2=mysqli_query($link, $consulta2);
			if($resul2){
				$rows2=mysqli_fetch_array($resul2);
			}
				
			$consulta3="SELECT * FROM categoria WHERE id_categoria='".$rows['id_categoria']."'";
			$resul3=mysqli_query($link, $consulta3);
			if($resul3){
				$rows3=mysqli_fetch_array($resul3);
			}
		}
		?>
		
<section class="contenedor-principal">		
		<h1><?php echo $rows2['ciudad']; ?> - Argentina </h1>
		<h1><?php echo $rows['descripcion'];?></h1>
			
			<div class="detalleco">	
				<?php 
					if($rows['imagen']!=null){
					 	echo "<img src=mostrarimagen.php?id_couch=$rows[id_couch]>"; 
					 }else {
					 	echo '<img src="./imagenes/noimg.png" width="200px" height="200px"> ';

					 }				
				
				?> 
			
				<p>Direccion del Couch: <?php echo $rows['direccion'] ?><p>
				<p>Ano: 2016</p>
				<p>Para: <?php echo $rows['cantidad_personas'] ?> persona/s.</p>
				<p>Categoria de Couch: <?php echo $rows3['descripcion'] ?>.</p>

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