
	
	<div class="banner">
   	 <h1 align="center" ><a href="index.php"><img src="./imagenes/couchinn.png" width="500px" height="200px"></h1>
   
	</div>
	
	<div align ="center" class="menu">
		<b> <a href="index.php"> Buscar hospedaje </a></b>
		
		<b><a href="publicar.php">Publicar un Couch</a></b>
		
		<b><a href="publicaciones.php">Mis Couchs</a></b>

		
		<b><a href="modificardatos.php">Modificar datos personales</a></b>
		
		<b><a href="logout.php"> Cerrar sesion </a></b>
		</br>

		<b> Registrado como: <?php echo $_SESSION['usuario'];
		if ($_SESSION['vip']==1){
			 echo ' /Usuario VIP';
		} else{ 
			 echo ' /Usuario regular'; 
		}
		
		?></b>

		
		
	</div>
	
	<hr />
	
