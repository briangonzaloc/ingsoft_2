<?php 
	session_start();
	include("conectar.php");
	include ("menucouch2.php");
	
	if ($_SESSION['estado'] != "logeado") {
  				header("Location: login.php");
			}
	



$usu= $_SESSION['id'];







if (isset($_POST['titulo'])
and isset($_POST['descripcion'])
and isset($_POST['direccion'])
and isset($_POST['cantidad'])
and isset($_POST['ciudad'])
and isset($_POST['categoria'])
and isset($_FILES['imagen']['name']) 
and isset($_POST['tipo'])){



$descripcion=$_POST['descripcion'];
$direccion=$_POST['direccion'];
$publicado=1;
$eliminado=0;
$cantidad=$_POST['cantidad'];
$ciudad=$_POST['ciudad'];
$usuario=$usu;
$categoria=$_POST['categoria'];
$titulo=$_POST['titulo'];

$file = rand(1000,100000)."-".$_FILES['imagen']['name'];
$file_loc = $_FILES['imagen']['tmp_name'];

$file_type = $_FILES['imagen']['type'];


$tmpname=$_FILES['imagen'] ['tmp_name'];
$fp= fopen($tmpname, 'rb');
$content= fread($fp, filesize($tmpname));
$content=addslashes($content);
fclose($fp);		

$sql="INSERT INTO couch (descripcion, direccion, publicado, eliminado, cantidad_personas, id_ciudad, id_usuario, id_categoria, imagen, tipoimagen, nombre) 
VALUES ('$descripcion', '$direccion', '$publicado', '$eliminado', '$cantidad', '$ciudad', '$usuario', '$categoria', '$content', '$file_type', '$titulo')";
$result = mysqli_query($link, $sql);
$msj="El Couch fue publicado correctamente";
header("Location: publicaciones.php?mensaje=$msj");
 	
}
?>



