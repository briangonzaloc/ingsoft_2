<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Modificar Categorias</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<link type="text/css" rel="stylesheet" href="estilos.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"> </script>
		<script src="js/bootstrap.min.js"> </script>
		<SCRIPT type="text/javascript" src="funciones.js"></SCRIPT>
		<script>
			function eliminar(id){
				if(confirm("¿Desea eliminar la categoria?")){
					window.location.href="borrar_categoria.php?id="+id;
				}
			}
		</script>
		
	</head>
	
	<body>
		<header>
			<?php
				session_start();
				include ("conectar.php");
				if ($_SESSION['estado'] != "logeado"){
					header("Location: login.php");
				};
				if ((isset($_SESSION["admin"]))and($_SESSION["admin"]==1)) {
  					include ("menucouch3.php");
				}else{
					header("Location: adentro.php");
				}
			?>
		</header>
		<section class="container contenedor-principal">
				<div class="row">
				</div>
  				<div class="row">
  					<div class="col-md-4">
  						<form class="form-categoria" action="alta_categoria.php" method="post" onsubmit="return validar_categoria()">
  							<div class="form-group">
  								<label for="nombreCategoria">Nombre de categor&iacute;a</label>
  								<input type="text" class="form-control" id="nombreCategoria" name="nombre_categoria" placeholder="Ingrese el nombre de categoría" required>
  							</div>
  							<div class="radio">
  								<label>
  									<input type="radio" name="radio_categoria" id="opcionActivado" value="activar">Activado
  								</label>
  							</div>
  							<div class="radio">
  								<label>
  									<input type="radio" name="radio_categoria" id="opcionDesactivado" value="desactivar">Desactivado
  								</label>
  							</div>
  							<div class="btn-center">
  								<button type="submit" class="btn btn-default"> Agregar</button>
  							</div>
  						</form>
  						<div class="row msj-mostrar">
	  						<?php
	  							if (isset($_GET["mensaje_alta"])){
	  								if($_GET["mensaje_alta"]=="Categoria agregada correctamente.")
	  									echo '<img src="./imagenes/oki.png" width="20px" height="20px">';
	  								else
	  									echo '<img src="./imagenes/ojo.png" width="20px" height="20px">';
									echo $_GET["mensaje_alta"];
								}
	  						?>
  						</div>
  					</div>
  					<div class="col-md-8">
  						<div class="row msj-mostrar">
  							<?php
	  							if (isset($_GET["mensaje_modificar"])){
	  								if($_GET["mensaje_modificar"]=="La categoria se ha modificado correctamente")
										echo '<img src="./imagenes/oki.png" width="20px" height="20px">';
									else
										echo '<img src="./imagenes/ojo.png" width="20px" height="20px">';
									echo $_GET["mensaje_modificar"];
								}
								if (isset($_GET["mensaje_eliminar"])){
									if($_GET["mensaje_eliminar"]=="La categoría se ha eliminado correctamente")
										echo '<img src="./imagenes/oki.png" width="20px" height="20px">';
									else
										echo '<img src="./imagenes/ojo.png" width="20px" height="20px">';
									echo $_GET["mensaje_eliminar"];
								}
							?>
  						</div>
  						<div class="box-categoria form-categoria box-title">
  							<h2 class="text-center h2-categoria">Categor&iacute;as:</h2>
  						</div>
  						<?php
  							
							include("conectar.php");
							$query = "SELECT * FROM categoria";
							$result = mysqli_query($link, $query);
							if(mysqli_num_rows($result) == 0){
								echo "<div class='box-categoria form-categoria'>No existen categorias</div>";
							}else{
								while( $rows = mysqli_fetch_assoc($result)){
									echo "<div class='box-categoria'>
											<form class='form-categoria' 
												<label class='title-categoria'>".$rows["descripcion"]."</label>
												<input type='hidden' name='nombre_anterior' value='".$rows["descripcion"]."'></br>
												<a href='modificarCat.php?id=".$rows["id_categoria"]."' class='btn btn-default'>Modificar</a>
												<a  href='javascript:eliminar(".$rows["id_categoria"].")' class='btn btn-default'> Eliminar</a></br>
											";
											if ($rows["activo"]==0){
												echo "<div class='box-deshabilitado'>La categoría está desactivada</div>";
											}; 
											echo "</form>
												</br>
											</div>";
									
								}
							}
						?>
  					</div>
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