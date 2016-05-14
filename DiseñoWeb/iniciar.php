<?php
session_start();
include ("usuario.php");
include ("conectar.php");

	$nombreusuario = $_POST['user'];
	$clave = $_POST['pass']; 
	$usuario= new Usuario();
	$usuario->setNombreUsuario($nombreusuario);
	$usuario->setClave($clave);
	$usuario->inciarSesion();

?> 