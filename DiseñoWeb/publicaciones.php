<!DOCTYPE html>
<html lang="es">
	<head>
			<title> Mis Couchs</title>
			<meta charset="utf-8"/>
			<link type="text/css" rel="stylesheet" href="estilos.css">
			<meta name="viewport" content="width=device-width,initial-scale=1"/>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	</head>
	
	<body>
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
		<h1>Mis Couchs:</h1>
		<hr />
		<?php
			if(isset($_GET['mensaje'])){
				echo '<img src="./imagenes/oki.png" width="20px" height="20px"> ';
				echo $_GET['mensaje'];
			}
			
		$consulta= 'SELECT * FROM couch WHERE id_usuario='.$_SESSION['id'].'';
		$result= mysqli_query($link, $consulta);
		if($result){
				
		
			while ($rows = mysqli_fetch_array($result)){
		?>


		<div class="couch">
			<div class="imagen_listadp">
				<?php 
					 echo "<img class='img-responsive center-block' src=mostrarimagen.php?id_couch=$rows[id_couch]>";

				?></br></br>
			</div>	 
			Ciudad: <?php echo $rows["id_ciudad"]; ?></br>
			Tipo Couch: <?php echo $rows["id_categoria"]; ?></br>
			<input type="hidden" value="<?php $rows["id_couch"]; ?>">
			Para: <?php echo $rows["cantidad_personas"]; ?> persona/s</br> 

			<div class="input4">
				</br><?php echo	"<a href=detalles.php?id_couch=$rows[id_couch]>"?>Detalles</a>		
			</div></br>
		</div>
	<?php
	}}
	?>
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