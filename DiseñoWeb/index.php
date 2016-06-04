<!DOCTYPE html>
<html lang="es">
	<head>
			<title>Couch Inn</title>
			<meta charset="utf-8"/>
			<meta name="viewport" content="width=device-width,initial-scale=1"/>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<link type="text/css" rel="stylesheet" href="estilos.css">
	</head>
	
	<body>
		<?php
			
			session_start();
			include ("conectar.php");

		
			if(isset( $_SESSION['estado']) and ( $_SESSION['estado']== "logeado")){
				if($_SESSION['admin']==1)
					include("menucouch3.php");
				else
					if($_SESSION['admin']==0)
						include ("menucouch2.php");	
			}else{
				include ("menucouch.php");
			}
			
		?>
			
			
			
			
			
<section class="contenedor-principal">
<div class="fondo">	
	<div class="buscar" name="input" action="listado.php" method="get"></br>
	<form action="listado.php">
		Provincia:<select>
			<option value="buenosaires"> Buenos Aires</option>
			<option value="cordoba"> Cordoba</option>
			<option value="mendoza">Mendoza</option>
			<option value="rionegro">Rio Negro</option>
			<option value="neuquen">Neuquen</option>
		</select>
			Fecha desde: <input type="date" name="llegada"></br>
			Fecha hasta: <input type="date" name="llegada">
			
			Cantidad de viajeros:<select>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select></br>
			Categoria:<select name="categoria" id="categoria"></br>
  				<option>Seleccione</option></br>
  					<?php 
  					$result= mysqli_query($link, "SELECT * FROM categoria");
  					if($result){
  						while($row = mysqli_fetch_array($result)){
  							echo '<option value="'.$row["id_categoria"]. '">'.$row["descripcion"].'</option>';
  						}
  					}
  					?>

  			</select></br>
		<input class="input2" type="submit" value="Buscar">
	</form>
	</div>
	
	
	
	
	
	
</div>


<hr />

<?php
	$consulta= "SELECT * FROM couch";
		$result= mysqli_query($link, $consulta);
		if($result){
				
		
			while ($rows = mysqli_fetch_array($result)){
		?>
		<div class="couch">
			<div class="imagen_listad">
			<?php 
		
			if (isset($_SESSION['estado']) and isset($_SESSION['vip'])){
				if($_SESSION['vip']==1){
					if($rows['imagen']!=null){
					 	echo "<img class='img-responsive center-block' src=mostrarimagen.php?id_couch=$rows[id_couch]>"; 
					 }else {
					 	echo '<img src="./imagenes/noimg.png" width="200px" height="200px"> ';

					 }
				 
				 }else{ echo "Para ver la imagen usted debe ser usuario VIP";}
			}else {
				echo "Para ver la imagen usted debe ser usuario VIP";
			}
			
			$consulta1="SELECT * FROM ciudad WHERE id_ciudad='".$rows['id_ciudad']."'";
			$resul1=mysqli_query($link, $consulta1);
			if($resul1){
				$row1=mysqli_fetch_array($resul1);
			}
			
			$consulta2="SELECT * FROM categoria WHERE id_categoria='".$rows['id_categoria']."'";
			$resul2=mysqli_query($link, $consulta2);
			if($resul2){
				$row2=mysqli_fetch_array($resul2);
			}
			
			
			?>
			</br>
			</br>
			</div>	 
			<h4><?php echo $rows["nombre"]; ?></h4></br>
			Ciudad:<?php echo $row1["ciudad"]; ?></br>
			Tipo Couch: <?php echo $row2["descripcion"]; ?></br>
			<input type="hidden" value="<?php $rows["id_couch"]; ?>">
			Para: <?php echo $rows["cantidad_personas"]; ?> persona/s</br> 

			<div class="input4">
				</br><?php echo	"<a href=detalles.php?id_couch=$rows[id_couch]>"?>Detalles</a>		
			</div>
			
		 	<?php //<form action="detalles.php?id_couch= $rows['id_couch']"><input class="input" type="submit" value="Detalles"></form>?>

		</div>
		</br>
		</br>
	
		<?php
			}	
		}
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