<html>
	<head>
			<title>Modificar Couch</title>
			<link type="text/css" rel="stylesheet" href="estilos.css">

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
					
			else
				include ("menucouch.php");
			}
			
		?>
			

			
	?>
	<div class="registro" align="center">	
		<form name="input" action="publicaciones.php" method="get"></br>
  			Provincia: <input type="text" name="provincia"></br>
  			Ciudad:<input type="text" name="ciudad"></br>
  			Tipo:<select name="Seleccionar"></br>
  				<option value="cama">Cama</option></br>
  				<option value="sillon">Sillon</option></br>
  				<option value="carpa">Carpa </option></br>

  			</select></br>
  			Cantidad de personas: <input type="text" name="cantidad"></br>
  			Fecha desde: <input type="date" name="llegada"></br>
			Fecha hasta: <input type="date" name="llegada"></br>
			Imagen: <input type="file"></br>
  			
  			
 	 		<input class="input" type="submit" value="Modificar">
		</form>

	
	<div>
	
	</body>
</html>