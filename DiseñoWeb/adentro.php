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
			
			if(isset( $_SESSION['estado']) and ( $_SESSION['estado']== "logeado")){
				if($_SESSION['admin']==1)
					include("menucouch3.php");
				
				else
					if($_SESSION['admin']==0)
						include ("menucouch2.php");

			}
			
		?>
			
			
			
		
		
		<div>
			<p class="adentro">Bienvenido <?php echo $_SESSION["usuario"];?> </p>
			
			
			
				<?php if ($_SESSION['vip']==0){
					echo "<a  href='servip.php'>$$$ Convertirse en usuario VIP $$$</a></div>";
				}
				?>
				
		</div>
	
	</body>
</html>