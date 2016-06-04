<?php
	include("conectar.php");
	$query= "SELECT * FROM categoria WHERE descripcion = '".$_POST['nombre_categoria']."'";
	$result = mysqli_query($link, $query);

	if ( mysqli_num_rows($result) == 0){
		if ($_POST["radio_categoria"] == "activar"){
			$activo=1;
		}
		else{
			$activo=0;
		};
		$query="INSERT INTO categoria(descripcion, activo) VALUES ('".$_POST["nombre_categoria"]."', '".$activo."')";
		$result = mysqli_query($link, $query);
		mysqli_close($link);
		
	
		$mensaje_alta="Categoria agregada correctamente.";
	}
	else {
		$mensaje_alta="La categoria ingresada ya existe. Ingrese una nueva categoria.";
	}
	mysqli_close($link);
	header("Location: categoria.php?mensaje_alta=".$mensaje_alta);
?>