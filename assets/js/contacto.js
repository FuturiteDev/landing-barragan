$( document ).ready(function() {

	$("form", this).on("submit", function(e){
		e.preventDefault();

		var error = false;
		var msj = "";
		var nombre = $("input[name='nombre']", this).val();
		var telefono = $("input[name='telefono']", this).val();
		var correo = $("input[name='correo']", this).val();
		var mensaje = $("input[name='mensaje']", this).val();
		var id = $(this).attr('id');

		var utm_id = $("input[name='utm_id']", this).val();
        var utm_campaign = $("input[name='utm_campaign']", this).val();
        var utm_source = $("input[name='utm_source']", this).val();
        var utm_medium = $("input[name='utm_medium']", this).val();
        var utm_content = $("input[name='utm_content']", this).val();
        var utm_term = $("input[name='utm_term']", this).val();
		


		if(!error && nombre.length <= 2){ error = true;	msj = "El campo nombre nombre es requerido"; }
		if(!error && telefono.length <= 8){ error = true;	msj = "El campo nombre telefono es requerido"; }
		if(!error && correo.length <= 5){ error = true;	msj = "El campo correo es requerido"; }
		//Método encargado de generar el token de recaptcha
		grecaptcha.ready(function () {
			grecaptcha.execute('6LfqplYcAAAAACr0Ga6LnKyX2SB1J4dguvdf-jgz', { action: 'saveLead' }).then(function (token) {
				if(!error){
					formActions(true);
					var data = {};
					data.nombre = nombre;
					data.telefono = telefono;
					data.correo = correo;		
					data.mensaje = mensaje;	
					data.forma_contacto = id;
					data.token = token;

					data.utm_id = utm_id;
					data.utm_campaign = utm_campaign;
					data.utm_source = utm_source;
					data.utm_medium = utm_medium;
					data.utm_content = utm_content;
					data.utm_term = utm_term;

					$.ajax({
						url: "_send.php",
						type: "POST",
						data: data,
						dataType: "JSON",
						error: function(e){
							console.log(e);
							formActions(false);
						},
						success: function(result) {
							console.log(result);
							formActions(false);
							if(result.status) {
								alert (result.message);
								$('form').each(function() { this.reset() });
								window.open('gracias.php','_self')
							} else {
								alert (result.message);
							}
						}
					});
				} else {
					alert(msj);
				}
			});
		});
	});

	// valida que este llenos los datos requeridos
	$("button").click(function(){
        $("input").addClass("invalid");
    });


	//Clientes Slider logos
    $('.slider-cliente').bxSlider({
    	/*preloadImages: 'all',
    	auto: true,
    	pager: true,
    	minSlides: 1,
    	maxSlides: 3,
    	moveSlides: 1,
    	slideWidth: 450,
    	shrinkItems: false,*/

        preloadImages: 'all',
        auto: true,
        controls: true,
        pager: true,
        pause: 2000,
        speed: 300,
        minSlides: 1,
        maxSlides: 3,
        moveSlides: 1,
        slideWidth: 370
    });

});


function formActions(block) {

	$('input, select, button, a, textarea, checkbox').each(function () {
		$(this).attr('disabled', block);
	});
}