$(document).ready(function() {

	$("#correoOK").hide();
	$("#userOK").hide();

	$("#campoEmail").change(function(){
		const campo = $("#campoEmail"); // referencia jquery al campo
		campo[0].setCustomValidity(""); // limpia validaciones previas

		// validación html5, porque el campo es <input type="email" ...>
		const esCorreoValido = campo[0].checkValidity();
		if (esCorreoValido && correoValidoComplu(campo.val())) {
			// el correo es válido y acaba por @ucm.es: marcamos y limpiamos quejas

			// tu código aquí: coloca la marca correcta
			$("#correoOK").show();
			$("#correoOK").html("&#x2714");
			
			campo[0].setCustomValidity("");
		} else {			
			// correo invalido: ponemos una marca y nos quejamos

			// tu código aquí: coloca la marca correcta
			$("#correoOK").show();
			$("#correoOK").html("&#x26a0");

			campo[0].setCustomValidity("El correo debe ser válido y acabar por @ucm.es");
		}
	});

	
	$("#campoUser").change(function(){
		var url = "comprobarUsuario.php?user=" + $("#campoUser").val();
		$.get(url,usuarioExiste);
  });


	function correoValidoComplu(correo) {

		return (correo.slice(-7) === "@ucm.es");
	}

	function usuarioExiste(data,status) {
	
		if(status === "success"){

			if(data === "Disponible"){
				$("#userOK").show();
				$("#userOK").html("&#x2714");

			}
			else{
				$("#userOK").show();
				$("#userOK").html("&#x26a0");
				alert("El usuario ya existe");
			}
		}

	}
})