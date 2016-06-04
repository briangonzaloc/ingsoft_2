<?php
	include("conectar.php");
	if (isset($_GET["id"])){
		$query = "SELECT * FROM couch WHERE id_categoria = (SELECT id_categoria FROM categoria WHERE id_categoria = '".$_GET["id"]."')";
		$result= mysqli_query($link, $query);
	
		if ( mysqli_num_rows($result) > 0){
			//borrado lógico
			$query = "UPDATE categoria SET activo=0 WHERE id_categoria = '".$_GET["id"]."' ";
			$mensaje_eliminar="La categoría está deshabilitada ya que existen couchs asociados a ésta categoría, por lo tanto no puede eliminarse";
		}
		else{
			//borrado físico
			$query = "DELETE FROM categoria WHERE id_categoria = '".$_GET["id"]."'";
			$mensaje_eliminar="La categoría se ha eliminado correctamente";
		}
		$result = mysqli_query($link, $query);
		mysqli_close($link);
		header("Location: categoria.php?mensaje_eliminar=".$mensaje_eliminar);
	}
?>