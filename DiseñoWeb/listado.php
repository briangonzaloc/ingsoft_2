<html>
	<head>
			<title>Couch Inn</title>
			<link type="text/css" rel="stylesheet" href="estilos.css">

	</head>
	
	<body>
		<?php
			session_start();
			include("conectar.php");
			
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
			
			
		
		<h1>Couchs disponibles:</h1>
		<hr />

		 	 		

		
		</div>
		</br>
		</br>
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
				 echo "<img src=mostrarimagen.php?id_couch=$rows[id_couch]>";
				 }
					
			}else{ 
				echo "Para ver la imagen usted debe ser usuario VIP";
			}
			?></br></br>
			</div>	 
			Provincia: <?php echo $rows["id_provincia"]; ?></br>
			Tipo Couch: <?php echo $rows["id_categoria"]; ?></br>
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
	

	
	</body>
</html>