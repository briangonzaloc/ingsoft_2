function validar_login(){

	usuario= document.getElementById("user").value;
		if(usuario==null || usuario.length==0|| /^\s+$/.test(usuario)){
			alert("Ingresar usuario");
			return false;
		}	

	contrasena= document.getElementById("pass").value;
		if(contrasena==null || contrasena.length==0|| /^\s+$/.test(contrasena)){
			alert("Ingresar contrasena");
			return false;
		}	
	return true;

}


function validar_publicacion(){
		
	titulo= document.getElementById("titulo").value;
	if(titulo==null ||titulo.length==0 || /^\s+$/.test(titulo)){
		alert("Ingrese el titulo para su publicacion");
		return false;
	}	
		
	descripcion= document.getElementById("descripcion").value;
	if(descripcion==null ||descripcion.length==0 || /^\s+$/.test(descripcion)){
		alert("Ingresar la descripcion del couch");
		return false;
	}
	
	direccion= document.getElementById("direccion").value;
	if(direccion==null || direccion.length==0 || /^\s+$/.test(direccion)){
		alert("Ingresar la direccion");
		return false;
	}
	
	cantidad= document.getElementById("cantidad").value;
	if(cantidad==null || cantidad.length==0 || /^\s+$/.test(cantidad) ||isNaN(cantidad)){
		alert("Ingresar la cantidad de personas (con numeros)");
		return false;
	}
	
	ciudad= document.getElementById("ciudad").selectedIndex;
	if(ciudad==null || ciudad==0){
		alert("Ingrese la ciudad del couch");
		return false;
	}
	
	categoria= document.getElementById("categoria").selectedIndex;
	if(categoria==null || categoria==0){
		alert("Ingresar la categoria del couch");
		return false;
	}
	

    return true;
}



function validar_registro(){
	nombre= document.getElementById("nombre").value;
	if(nombre==null || nombre.length==0 || /^\s+$/.test(nombre) || (!isNaN(nombre))){
		alert("Ingresar su nombre, usando solo letras");
		return false;
	}
	usuario= document.getElementById("nombreusuario").value;
	if(usuario==null || usuario.length==0 || /^\s+$/.test(usuario)){
		alert("Ingresar un nombre de usuario");
		return false;
	}
	apellido= document.getElementById("apellido").value;
	if(apellido==null || apellido.length==0 || /^\s+$/.test(apellido)|| (!isNaN(apellido))){
		alert("Ingresar su apellido");
		return false;
	}
	
	/*fecha= document.getElementById("fecha_nacimiento").value;
	if(fecha==null || fecha.length==0 || /^\s+$/.test(fecha) || fecha="0000-00-00"){
		alert("Ingrese su fecha de nacimiento");
		return false;
	}*/
	
	fecha= document.getElementById("fecha_nacimiento").value;
	var IsoDateRe = new RegExp("^([0-9]{4})-([0-9]{2})-([0-9]{2})$");
 	var matches = IsoDateRe.exec(fecha);
	 if (!matches) {
	 
	 alert("Ingrese una fecha de nacimiento valida en el formato solicitado");
	 return false;
	 }
  
	
	
	
	
		mail= document.getElementById("mail").value;
	if(mail==null || mail.length==0 || /^\s+$/.test(mail)){
		alert("Ingresar su direccion de e-mail");
		return false;
	}	
	
	contrasena= document.getElementById("password").value;
	if(contrasena==null || contrasena.length==0 || /^\s+$/.test(contrasena)){
		alert("Ingresar la contrasena");
		return false;
	}
	pais= document.getElementById("pais").selectedIndex;
	if(pais==null || pais==0){
		alert("Ingrese su pais");
		return false;
	}
	

	return true;
	
}


function validar_modificar_categoria(){
	nombre=document.getElementById("nombre_nuevo").value;
	if(nombre==null || nombre.length==0 || /^\s+$/.test(nombre) || (!isNaN(nombre))){
		alert("Ingresar el nombre de la categoría, usando solo letras");
		return false;
	}
	if ( !document.getElementById("radioActivado").checked && !document.getElementById("radioDesactivado").checked){
		alert("Completar campo");
		return false;
	}
}

function validar_categoria(){
	nombre=document.getElementById("nombreCategoria").value;
	if(nombre==null || nombre.length==0 || /^\s+$/.test(nombre) || (!isNaN(nombre))){
		alert("Ingresar el nombre de la categoría, usando solo letras");
		return false;
	}
	if ( !document.getElementById("opcionActivado").checked && !document.getElementById("opcionDesactivado").checked){
		alert("Completar campo");
		return false;
	}
}




