//Función que sirve para validar los distintos campos de los formularios

function validarCampos(formulario) {

	var nombre = /^([a-z]|[A-Z]|á|é|í|ó|ú|ñ|\s)+$/;
	var pass = /^([a-z]|[0-9]|\s)+$/;
	var telefono = /^([0-9\s])+$/;
	var email = /^(.+\@.+\..+)$/;
	
	
	//Nombre de usuario
	if(!nombre.test(formulario.usuario.value)){
		alert('Campo vacío o incorrecto');
		return false;
	} 
	//Contraseña
	if(!pass.test(formulario.pass.value)){
		alert('Contraseña incorrecta, solo letras mínusculas y números');
		return false;
	}
	//Comprobar contraseña
	if (formulario.pass.value != formulario.pass2.value){
		alert('Las dos contraseñas no coinciden, intentalo de nuevo');
		return false;
	}
	//E-mail
	if(!email.test(formulario.email.value)) { 
		alert('El e-mail no es correcto');
		return false;
	}  
	
	//Teléfono
	if(!telefono.test(formulario.tlf.value)) {
		alert('Número de teléfono incorrecto');
		return false;
	}
	
	//Fecha de nacimiento (hacemos las comprobaciones para los meses que tienen 30 dias)
	if((formulario.fechadia.value == 30) && (formulario.fechames.value == 2)){
		alert('Fecha de nacimiento incorrecta');
		return false;
	}
	
	if((formulario.fechadia.value == 31) && (formulario.fechames.value == 2)){
		alert('Fecha de nacimiento incorrecta');
		return false;
	}
	
	if((formulario.fechadia.value == 30) && (formulario.fechames.value == 4)){
		alert('Fecha de nacimiento incorrecta');
		return false;
	}
	
	if((formulario.fechadia.value == 30) && (formulario.fechames.value == 6)){
		alert('Fecha de nacimiento incorrecta');
		return false;
	}
	
	if((formulario.fechadia.value == 30) && (formulario.fechames.value == 9)){
		alert('Fecha de nacimiento incorrecta');
		return false;
	}
	
	if((formulario.fechadia.value == 30) && (formulario.fechames.value == 11)){
		alert('Fecha de nacimiento incorrecta');
		return false;
	}

	//Firma
        if(document.forms[0].texto.value.length >= 30){
		alert('La firma es demasiado larga'); document.forms[0].texto.select();
		return false;
	}
return true;	
}
