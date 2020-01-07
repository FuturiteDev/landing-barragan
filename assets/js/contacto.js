$( document ).ready(function() {

	$("form", this).on("submit", function(e){
		e.preventDefault();

		var error				= false;
		var msj 				= "";
		var nombre 				= $("input[name='nombre']", this).val();
		var telefono 			= $("input[name='telefono']", this).val();
		var correo	 			= $("input[name='correo']", this).val();
		var mensaje	 			= $("input[name='mensaje']", this).val();
		var id = $(this).attr('id');
		


		if(!error && nombre.length <= 2){		error = true;	msj = "El campo nombre nombre es requerido";	}
		if(!error && telefono.length <= 8){		error = true;	msj = "El campo nombre telefono es requerido";	}
		if(!error && correo.length <= 5){		error = true;	msj = "El campo correo es requerido";	}

		
		if(!error){

			formActions(true);

			var data = {};
			data.nombre = nombre;
			data.telefono = telefono;
			data.correo = correo;		
			data.mensaje = mensaje;	
			data.forma_contaco = id;
			

			$.ajax({
				url: "_send.php",
				type: "POST",
				data: data,
        		dataType: "JSON",
				error: function(e){
					console.log(e);
					formActions(false);
					//modal_("Error", "Experimenta");
				},
				success: function(result){
				
        	console.log(result);
          	formActions(false);
          
	        if(result.estatus){
	          	alert (result.message);
	            $('form').each(function() { this.reset() });
	            window.open('gracias.php','_self')
	        }else{
	          	alert (result.message);
	        }
				
        }
			});
		}
		else{
			alert(msj);
		}
	});

	// valida que este llenos los datos requeridos
	$("button").click(function(){
        $("input").addClass("invalid");
    });

});


function formActions(block) {

	$('input, select, button, a, textarea, checkbox').each(function () {
		$(this).attr('disabled', block);
	});
}