<?php 
	session_start();
	include("conectar.php");
	include ("menucouch2.php");
	







if (isset($_POST['nombre'])
and isset($_POST['nombreusuario'])
and isset($_POST['apellido'])
and isset($_POST['fecha_nacimiento'])
and isset($_POST['mail'])
and isset($_POST['password'])
and isset($_POST['pais'])
){



	$nombre=$_POST['nombre'];
	$usuario=$_POST['nombreusuario'];
	$apellido=$_POST['apellido'];
	$nacimiento=$_POST['fecha_nacimiento'];	
	$mail=$_POST['mail'];
	$contrasena=$_POST['password'];
	$pais=$_POST['pais'];
	$vip=0;		
	$sexo=1;
	$admin=0;


	$sql1= "SELECT * FROM usuario WHERE nombreusuario='".$usuario."'";
	$resul=mysqli_query($link, $sql1);
	if ( mysqli_num_rows($resul) != 0){
		$msj="El nombre de usuario no se encuentra disponible";
		echo $sql1;
		header("Location: registrarse.php?mensaje=".$msj);
		
	}else{
		$sql="INSERT INTO usuario (nombre, apellido, password,  email, vip, sexo, administrador, fecha_nacimiento, id_pais, nombreusuario)
		VALUES ('$nombre', '$apellido', '$contrasena', '$mail', '$vip', '$sexo', '$admin', '$nacimiento', '$pais', '$usuario')";
		$result2 = mysqli_query($link, $sql);
	
		header("Location: login.php");
	}
}

?>
