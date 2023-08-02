// Se utiliza la libreria JQuery para realizar validaciones

$(document).ready(function() {


/** Al dar click en el boton "VOTAR" se realizan las validaciones de los campos requeridos,
	donde se encuentre una irregularidad se informará mediante una alerta de navegador, 
	para finalizar haciendo focus en el campo / input especifico.
*/
	$('#votar').click(function(){

		// OBTENER ID DE INPUTS
		var nombre = document.getElementById('name');
		var alias = document.getElementById('alias').value.trim();

		//Expresión regular para alias
		var regularAlias = /^[a-zA-Z0-9]+$/;

		// Expresión regular para validar el formato del RUT chileno
		var regularRut =/^\d{1,2}\.\d{3}\.\d{3}\-\d|k$/i;
		var rut = document.getElementById('rut').value.trim();

		var email = document.getElementById('email');

		// Validar que los check esten marcados mediante la clase checknosotros 
		var checkboxes = document.querySelectorAll('.checknosotros:checked');
		var numChecked = checkboxes.length;

// VALIDAR QUE CAMPO NOMBRE NO ESTE VACIO 
		if ($(nombre).val() == "") {
			alert('Se requiere NOMBRE Y APELLIDO');
			$("input#name").focus();
			return false;
		}
// VALIDAR ALIAS
		if (!regularAlias.test(alias)) {
			alert('El campo ALIAS debe contener letras y números, EJ: Prueba123.');
			$("input#alias").focus();
			return false;
		}

// VALIDAR LARGO DE RUT Y FORMATO
		if(rut.length <= 8){
			alert('RUT INVALIDO!');
			$("input#rut").focus();
			return false;
		}
// VALIDAR RUT
		if(!regularRut.test(rut)){
			alert('El formato del RUT ingresado es incorrecto.');
			$("input#rut").focus();
			return false;	  
		}

// VALIDAR CORREO - EMAIL
		

		if($(email).val().indexOf('@', 0) == -1 || $(email).val().indexOf('.', 0) == -1) {
            alert('El correo electrónico introducido no es correcto.');
			$("input#email").focus();
            return false;
        }
// VALIDAR CHECKBOXES
		if (numChecked !== 2) {
			alert('Debes marcar minimo 2 checkboxes');
			return false;
		  }
		
	});
});


