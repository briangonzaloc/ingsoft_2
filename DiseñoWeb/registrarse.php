<html>
	<head>
			<title> Registrarse</title>
			<link type="text/css" rel="stylesheet" href="estilos.css">
						<SCRIPT type="text/javascript" src="funciones.js">
			</SCRIPT>

	</head>
	
	<body background-color="#F5F6CE";>
		<?php
		include('conectar.php');
			include ("menucouch.php");
		?>
		

	<div class="fondo3">
	<div class="registro" align="center">	
			<?php
	  		if (isset($_GET["mensaje"])){
				echo '<img src="./imagenes/error.png" width="20px" height="20px">';
				echo $_GET["mensaje"];
			}
		?></br>
		Complete los siguientes campos para registrarse en Couch Inn:
		<form name="input" action="agregarusuario.php" onsubmit="return validar_registro()" method="post"></br>
  			Nombre:</br> <input type="text" name="nombre" placeholder="Escriba su nombre" id="nombre"></br>
  			Nombre de usuario:</br> <input type="text" placeholder="Escriba su usuario" name="nombreusuario" id="nombreusuario"></br>
  			Apellido: </br><input type="text" id="apellido" placeholder="Escriba su apellido" name="apellido"></br>
  			Nacimiento:</br><input type="text" placeholder="AAAA-MM-DD" id="fecha_nacimiento" name="fecha_nacimiento"></br>
  			Mail:</br><input type="email" id="mail" name="mail" placeholder="Escriba su mail aqui"></br>
  			Contrasena:</br><input type="password" id="password" name="password" ></br>
  			Pais:</br><select name="pais" id="pais" value=""></br>
  				<option value="pais">Seleccione</option></br>
  					<?php 
  					$result= mysqli_query($link, "SELECT * FROM pais");
  					if($result){
  						while($row = mysqli_fetch_array($result)){
  							echo '<option value="'.$row["id_pais"]. '">'.$row["pais"].'</option>';
  						}
  					}
  					?>
  			</select></br>
 	 		<input class="input" type="submit" value="Registrarse">
		</form>

	</div>
	<div>
	
	</body>
</html>