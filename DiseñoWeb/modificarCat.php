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
			function validate(){
				if ( !document.getElementById("radioActivado").checked && !document.getElementById("radioDesactivado").checked){
					alert("Completar campo");
					return false;
				}
				return true;
			}
		</script>
	</head>
	
	<body>
		<header>
			<?php
				session_start();
				include ("conectar.php");
				include ("menucouch3.php");

				if (($_SESSION['estado'] != "logeado") && ($_SESSION['administrador']!="1" )) {
  					header("Location: login.php");
				}	
			?>
		</header>
			<div class="container contenedor-principal">
  				<div class="row">
  					<div class="col-md-4"></div>
  					<div class="col-md-4">
  						<?php
  							include("conectar.php");
  							if(isset($_GET["id"])){
  								$query= "SELECT * FROM categoria WHERE id_categoria = '".$_GET['id']."'";
  								$result = mysqli_query($link, $query);
  								$rows = mysqli_fetch_assoc($result);
  							};
  						?>
  						<form class="form-categoria" action="modificar_categoria.php" method="post" onsubmit="return validar_modificar_categoria()">
  							<div class="form-group">
  								<label for="nombre_nuevo">Nombre de categor&iacute;a</label>
  								<input type="text" class="form-control" id="nombre_nuevo" name="nombre_nuevo" value="<?php echo $rows["descripcion"] ?>" required>
  							</div>
  							<div class="radio">
  								<label>
  									<input type="radio" name="radio_categoria" id="radioActivado" value="activar" <?php $ok=""; if($rows["activo"]==1)
  										$ok="checked"; echo $ok?> >Activado
  								</label>
  							</div>
  							<div class="radio">
  								<label>
  									<input type="radio" name="radio_categoria" id="radioDesactivado" value="desactivar" <?php $ok=""; if($rows["activo"]==0)
  										$ok="checked"; echo $ok?> >Desactivado
  								</label>
  							</div>
  							<input type="hidden" name="nombre_anterior" value="<?php echo $rows["descripcion"] ?>" >
  							<div class="btn-center">
  								<button type="submit" class="btn btn-default"> Aceptar</button>
  								<a href="categoria.php" class="btn btn-default">Cancelar</a>
  							</div>
  						</form>
  					</div>
  					<div class="col-md-4"></div>
  				</div>	
			</div>
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