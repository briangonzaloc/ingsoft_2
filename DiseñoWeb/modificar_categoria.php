<?php
	include("conectar.php");

	if ($_POST["radio_categoria"]== "activar"){
		$activar=1;
	}
	else{
		$activar=0;
	};
	$query="SELECT activo FROM categoria WHERE descripcion = '".$_POST["nombre_anterior"]."' ";
	$result=mysqli_query($link, $query);
	$row=mysqli_fetch_assoc($result);
	if(( $_POST["nombre_nuevo"] == $_POST["nombre_anterior"] ) and ($activar==$row["activo"])){	
		$mensaje_modificar="No se han realizado cambios en la categoria";
	}
	else{
		$query="SELECT * FROM categoria WHERE descripcion = '".$_POST["nombre_nuevo"]."' ";
		$result=mysqli_query($link, $query);
		if(($_POST["nombre_anterior"] != $_POST["nombre_nuevo"])and(mysqli_num_rows($result) != 0)){
			$mensaje_modificar="Ya existe categoría con ese nombre. Por lo tanto no ha sido modificado";
		}
		else{
			$query="UPDATE categoria SET descripcion = '".$_POST['nombre_nuevo']."', activo = '".$activar."' WHERE descripcion = '".$_POST['nombre_anterior']."'";
			mysqli_query($link, $query);
			$mensaje_modificar="La categoria se ha modificado correctamente";
		}
	}
	
	mysqli_close($link);
	
	header("Location: categoria.php?mensaje_modificar=".$mensaje_modificar);

?>
