	$(document).ready(function(){
		$("#Submit").click(function(){
			var c = $("#CorreoElectronico").val();
		    var e = $('#EnunciadoPregunta').val();
		
			var r = $("#RespuestaCorrecta").val();
		    var r1 = $("#RespuestaIncorrecta1").val();
			var r2 = $("#RespuestaIncorrecta2").val();
		    var r3 = $("#RespuestaIncorrecta3").val();
			var t = $("#TemaDeLaPregunta").val();
			
			var formatoCorreoEstudiante = new RegExp(/^([a-zA-Z])+([0-9]{3})+\@([a-zA-Z])+\.+([a-zA-Z]{3}\.)+([a-zA-Z]{2,3})+$/);
			var formatoCorreoProfesor = new RegExp(/^([a-zA-Z])+((\.){0,1})+([a-zA-Z])+\@([a-zA-Z]{3}\.)+([a-zA-Z]{2,3})+$/);
			var lenght = new RegExp(/^(.){10,}$/);
			
			var i = 0;
			
			if (c == ""){
				alert("No hay correo");
				return false;
			}
			if ( formatoCorreoEstudiante.test(c) == false && formatoCorreoProfesor.test(c) == false ){
				alert("El correo introducido no sigue el formato adecuado");
				return false;
			}else if ( ( c.indexOf("@ikasle.ehu.eus", 0) == -1 && c.indexOf("@ikasle.ehu.es", 0) == -1 ) && ( c.indexOf("@ehu.eus") == -1 && c.indexOf("@ehu.es") == -1 )){
				alert("El correo introducido no es correcto");
				return false;
			}
			if (e == ""){
				alert("No hay enunciado");
				return false;
			}
			if (lenght.test(e) == false){
				alert("El enunciado ha de tener minimo 10 caracteres");
				return false;
			}
			if (r == ""){
				alert("Falta la respuesta correcta");
				return false;
			}
			if (r1 == ""){
				alert("Falta la respuesta incorrecta 1");
				return false;
			}
			if (r2 == ""){
				alert("Falta la respuesta incorrecta 2");
				return false;
			}
			if (r3 == ""){
				alert("Falta la respuesta incorrecta 3");
				return false;
			}
			if (t == ""){
				alert("Falta el tema de la pregunta");
				return false;
			}
			
			alert("El formulario se ha enviado correctamente");
		})
	})
