<?php 
include("conectar.php");
class Usuario{ 

    private $nombreusuario; 
	private $clave;
	
    public function __construct(){ 
        $this->nombreusuario = ""; 
        $this->clave = ""; 
       
    
    } 
    public function cargar($id_nombreusuario = null, $clave){ 
        $this->setNombreUsuario ($nombreusuario); 
        $this->setClave($clave); 
        
    } 
     
    public function setNombreUsuario($nombreusuario){ 
        $this->nombreusuario = $nombreusuario; 
    } 
    public function setClave($clave){ 
        $this->clave=$clave; 
    }
 
    public function getNombreUsuario(){ 
        return $this->nombreusuario; 
    } 
    public function getClave(){ 
        return $this->clave; 
    } 
    
    public function inciarSesion(){
    try {
 	   include("conectar.php");
    	$error = 'Usuario y/o contrasena erroneos';
   		$blanco='Debe ingresar un usuario y una contrasena correctos';
		$consulta = "SELECT * FROM usuario WHERE nombre = '".$this->getNombreUsuario()."' and contrasena = '".$this->getClave()."'";
		$result = mysqli_query($link, $consulta);
		if($result){
			if ($rows = mysqli_fetch_array($result)){
				$_SESSION['estado'] = "logeado";
				$_SESSION['usuario'] = $rows['nombre'];
				$_SESSION['id']= $rows['idusuario'];
				$_SESSION['vip']=$rows['vip'];
				header("Location: inicio.php");
			}	
			else{
				if($this->getNombreUsuario()== "" || $this->getClave() ==""){
					throw new Exception($blanco);
				}
				else{
					throw new Exception($error);
				}
			}
		}
		else{
				throw new Exception($blanco);
			}
	}
	catch (Exception $e) {
   		header("Location: login.php?error=".$e->getMessage());

	}
	}

}
?>