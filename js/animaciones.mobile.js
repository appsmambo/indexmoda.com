var videoComercial, videoPelotas, videoPasarela;
var parametro, carousel, $slideList, BV;
var bloques = ['', '#inicio', '#comercial', '#diviertete', '#lookbook1', '#lookbook2', '#lookbook3', '#lookbook4', '#pasarela', '#participa'];
jQuery.validator.addMethod("nombre", function(value, element) {
	return this.optional(element) || /^[a-zA-Z áéíóúÁÉÍÓÚÑñ]+$/.test(value);
});
function iniciaCarousel() {
	carousel = $('#wrapper').responsiveCarousel({
		direction: 'horizontal',
		transitionSpeed: 750,
		keyControl: true,
		arrows: true,
		tapToReturn: true,
		callback: carouselStateChanged
	});
}
function verPagina() {
	e = urlActual.indexOf('inicio');
	if (e > 0)
		carousel.showPage(1);
	
	e = urlActual.indexOf('comercial');
	if (e > 0)
		carousel.showPage(2);
	
	e = urlActual.indexOf('diviertete');
	if (e > 0)
		carousel.showPage(3);
	
	e = urlActual.indexOf('lookbook');
	if (e > 0)
		carousel.showPage(4);
	
	e = urlActual.indexOf('lookbook1');
	if (e > 0)
		carousel.showPage(4);
	
	e = urlActual.indexOf('lookbook2');
	if (e > 0)
		carousel.showPage(5);
	
	e = urlActual.indexOf('lookbook3');
	if (e > 0)
		carousel.showPage(6);
	
	e = urlActual.indexOf('lookbook4');
	if (e > 0)
		carousel.showPage(7);
	
	e = urlActual.indexOf('pasarela');
	if (e > 0)
		carousel.showPage(8);
	
	e = urlActual.indexOf('participa');
	if (e > 0)
		carousel.showPage(9);
	
/*	e = urlActual.indexOf('info/catalogo');
	if (e > 0) {
		carousel.showPage(9);
		$('.catalogo').trigger('click');
	}*/
	
	if (flag_producto) {
		$.fancybox({
			fitToView:true,
			autoSize:true,
			autoScale:true,
			aspectRatio:true,
			scrolling:'no',
			padding:0,
			margin:0,
			openEffect:'elastic',
			closeEffect:'elastic',
			type:'inline',
			href:url_producto
		});
		flag_producto = false;
	}
}
function verCatalogo() {
/*	if (parametro == 'participa?catalogo') {
//		ga('send', 'event', 'pagina', 'catalogo');
		carousel.showPage(7);
		$('.catalogo').trigger('click');
	}*/
}
function carouselStateChanged() {
	$.fancybox.close();
	var curPage = this.state.curPage;
	if (curPage !== 1 && curPage !== 8) {
		// inicio y pasarela
/*		videoPelotas.videoBgPause();
		videoPelotas.videoBgMute();*/
		$('footer').css('background-color', '#fff');
		videoPasarela.videoBgPause();
		videoPasarela.videoBgMute();
	}
	switch(curPage) {
		case 1:
/*			videoPelotas.videoBgPlay();
			videoPelotas.videoBgUnMute();*/
			break;
		case 5:
//			ga('send', 'event', 'pagina', '#lookbook-amarillo');
			break;
		case 6:
//			ga('send', 'event', 'pagina', '#lookbook-rosa');
			break;
		case 8:
			videoPasarela.videoBgPlay();
			videoPasarela.videoBgUnMute();
			$('footer').css('background-color', 'transparent');
			break;
	}
	if (!parametro) {
		parametro = '#';
		return;
	}
	hash = bloques[curPage];
	location.hash = hash;
}
$(document).ready(function() {
/*	videoPelotas = $('.fullscreen-video-pelotas').videoBG({
		mp4:urlBase+'/video/fondo-360p.mp4',
		poster:urlBase+'/video/fondo-360p.jpg',
		videoVolume:0.25
	});*/
	videoPasarela = $('.fullscreen-video-pasarela').videoBG({
		mp4:'video/pasarela-360p.mp4',
		poster:'video/pasarela-360p.jpg',
		videoVolume:0.25
	});
/*	videoComercial = $('body').videoBG({
		youtube:"OXmN2KVFRtI",
		videoVolume:0.5,
		autoplay:false
	});*/
	parametro = document.URL.split('#')[1];
	iniciaCarousel();
	$('.menu').click(function(e) {
		e.preventDefault();
		bloque = $(this).data('bloque');
//		ga('send', 'event', 'pagina', bloques[bloque]);
		carousel.showPage(bloque);
		$('.menu-nav').trigger('click');
	});
	$('.menu-nav').click(function() {
		$('header ul').slideToggle('slow');
		$('.menu-nav').toggleClass('active');
		$('.icono-menu-nav').toggleClass('active');
	});
	/*$('.play').click(function() {
		$('#wrapper').fadeOut('slow', function() {
			$('footer, header').fadeOut();
			videoComercial.videoBgPlay();
			$('.control-video').fadeIn('fast');
		});
	});
	$('.cerrar').click(function() {
		$('.control-video').fadeOut('fast');
		videoComercial.videoBgRewind();
		videoComercial.videoBgPause();
		$('#wrapper').fadeIn('fast', function() {
			$('footer, header').fadeIn();
		});
	});*/
	$('.prenda').fancybox({
		fitToView:true,
		autoSize:true,
		autoScale:true,
		aspectRatio:true,
		scrolling:'no',
		padding:0,
		margin:0,
		openEffect:'elastic',
		closeEffect:'elastic',
		type:'inline',
		nextClick:true,
		keys: {
			next: {
				39:'0'
			},
			prev: {
				37:'0'
			}
		}
	});
	$('.comercial').click(function() {
		$.fancybox({
			padding:0,
			margin:0,
			openEffect:'elastic',
			closeEffect:'elastic',
			wrapCSS:'blanco',
			allowfullscreen:'true',
			type:'iframe',
			href:'http://www.youtube.com/embed/OXmN2KVFRtI?autoplay=1&rel=0'
		});
	});
	$('.makingof').click(function() {
		$.fancybox({
			padding:0,
			margin:0,
			openEffect:'elastic',
			closeEffect:'elastic',
			wrapCSS:'blanco',
			allowfullscreen:'true',
			type:'iframe',
			href:'http://www.youtube.com/embed/-Qz68K6CqhI?autoplay=1&rel=0'
		});
	});
	$('.registro').click(function() {
		$.fancybox({
			padding:0,
			margin:0,
			openEffect:'elastic',
			closeEffect:'elastic',
			type:'inline',
			href:'#registro'
		});
	});
	$('.catalogo').click(function() {
		$.fancybox({
			padding:0,
			margin:0,
			autoSize:false,
			width:800,
			height:600,
			openEffect:'elastic',
			closeEffect:'elastic',
			wrapCSS:'blanco',
			scrolling: 'no',
			type:'inline',
			href:'#catalogo'
		});
	});
	$('.deseo').click(function() {
		valor = $(this).data('valor');
		if (valor == '0') {
			$(this).data('valor', '1');
			$(this).prop('src', urlBase+'/img/check-on.jpg');
			$('#info').val('todos');
		} else {
			$(this).data('valor', '0');
			$(this).prop('src', urlBase+'/img/check.jpg');
			$('#info').val('');
		}
		$(this).prop()
	});
	$('#formRegistro').validate({
		rules: {
			nombre: {
				required:true,
				nombre:true
			},
			email: {
				required:true,
				email:true
			},
			telefono: {
				number:true
			}
		},
		messages: {
			nombre: {
				required: "Ingrese su nombre y apellidos",
				nombre: "Ingrese su nombre correctamente"
			},
			email: {
				required: "Ingrese su email",
				email: "Ingrese su email correctamente"
			},
			telefono: {
				number: "Ingrese su teléfono correctamente"
			}
		},
		submitHandler: function(form) {
			$('#registrar').prop('disabled', 'disabled');
			console.log('1');
			$.ajax({
				type: "POST",
				url: urlBase+'/registro.php',
				data: $('#formRegistro').serialize(),
				success: function(res) {
					console.log(res);
					if (res == 'OK') {
						$('#registro').block({css: {width:'300px', border: 'none', padding: '15px', backgroundColor: '#000', '-webkit-border-radius': '10px', '-moz-border-radius': '10px', opacity: .9, color: '#fff'}, message: 'Gracias, tus datos han sido registrados.'});
						setTimeout(function() {
							$('.inputbox').val('');
							$('#registro').unblock({
								onUnblock: function() {
								}
							});
						}, 3000);
					} else {
						$('#registro').block({css: {width:'300px', border: 'none', padding: '15px', backgroundColor: '#000', '-webkit-border-radius': '10px', '-moz-border-radius': '10px', opacity: .9, color: '#fff'}, message: 'Vuelva a intentarlo.'});
						setTimeout(function() {
							$('#registro').unblock({
								onUnblock: function() {
								}
							});
						}, 3000);
					}
				},
				dataType: 'text'
			});
			return false;
		}
	});
});
$(window).load(function() {
	verPagina();
	new WOW().init();
});