<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0">
		<title>Index Otoño 2015 - Ripley</title>
		<meta property="fb:app_id" content="1552454504976194">
		<meta property="og:site_name" content="Index Otoño 2015 - Ripley">
		<meta property="og:title" content="Index Otoño 2015 - Ripley">
		<meta itemprop="name" content="Index Otoño 2015 - Ripley">
		<meta property="og:type" content="website">
@if(isset($prenda))
		<link rel="canonical" href="{{ url() }}/">
		<meta name="description" content="{{$prenda['texto']}}">
		<meta property="og:description" content="{{$prenda['texto']}}">
		<meta property="og:url" content="{{ url() }}/{{$prenda['lookbook']}}/{{$prenda['url']}}">
		<meta property="og:image" content="{{ url() }}/img/prendas/{{$prenda['imagen']}}">
@else
		<link rel="canonical" href="{{ url() }}/">
		<meta name="description" content="Descubre la nueva colección Otoño 2015 de Index #diviertete">
		<meta property="og:description" content="Descubre la nueva colección Otoño 2015 de Index #diviertete">
		<meta property="og:url" content="{{url()}}/">
		<meta property="og:image" content="{{ url() }}/img/facebook.png">
@endif
		<meta property="fb:admins" content="100008010128050">
		<script src="{{ url() }}/js/queryloader2.js"></script>
		<script src="{{ url() }}/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<link rel="stylesheet" href="{{ url() }}/css/video-background.css" type="text/css">
		<link rel="stylesheet" href="{{ url() }}/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="{{ url() }}/css/animate.css" type="text/css">
		<link rel="stylesheet" href="{{ url() }}/css/fancybox/jquery.fancybox.css" type="text/css">
		<link rel="stylesheet" href="{{ url() }}/css/main.css?ver=1.1" type="text/css">
		<link rel="stylesheet" href="{{ url() }}/css/mobile.css?ver=1.1" type="text/css">
		<script>
			var urlBase = '{{url()}}';
			var urlActual = document.URL;
			@if(isset($prenda))
			var flag_producto = true;
			var url_producto = '#{{$prenda['url']}}';
			@else
			var flag_producto = false;
			@endif
			window.addEventListener('DOMContentLoaded', function() {
				new QueryLoader2(document.querySelector("body"), {
					barColor: "#fff",
					backgroundColor: "#000",
					percentage: false,
					barHeight: 1,
					minimumTime: 500,
					maxTime: 15000,
					fadeOutTime: 1000
				});
			});
		</script>
		<script src="{{ url() }}/js/jquery-1.11.1.min.js"></script>
		<script src="{{ url() }}/js/swfobject.js"></script>
		<script src="{{ url() }}/js/jquery.video-background.js"></script>
		<script src="{{ url() }}/js/jquery.validate.min.js"></script>
		<script src="{{ url() }}/js/jquery.blockUI.js"></script>
		<script src="{{ url() }}/js/responsive-carousel.js"></script>
		<script src="{{ url() }}/js/jquery.fancybox.pack.js"></script>
		<script src="{{ url() }}/js/wow.min.js"></script>
		<script src="{{ url() }}/js/main.js"></script>
		<script src="{{ url() }}/js/animaciones.mobile.js?ver=1.1"></script>
		<script>
			 /*(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			 ga('create', 'UA-54699300-1', 'auto');
			 ga('require', 'displayfeatures');
			 ga('send', 'pageview');*/
		</script>
	</head>
	<body>
		<div class="control-video" style="display:none"><img src="{{ url() }}/img/cerrar-b.png" class="cerrar boton" alt=""></div>
		<div id="wrapper">
			<div id="rotame">
				<div class="content-a inicio">
					<div class="content-b">
						<img src="{{ url() }}/img/rotame.png" alt="Rótame, por favor.">
					</div>
				</div>
        	</div>
			<header>
				<div class="menu-nav">
					<div class="boton icono-menu-nav"></div>
				</div>
				<div class="clearfix"></div>
				<ul>
					<li><a class="menu" data-bloque="1" href="#">home</a></li>
					<li><a class="menu" data-bloque="2" href="#">video</a></li>
					<li><a class="menu" data-bloque="3" href="#">#diviertete</a></li>
					<li><a class="menu" data-bloque="4" href="#">lookbook</a></li>
					<li><a class="menu" data-bloque="9" href="#">participa</a></li>
				</ul>
			</header>
			<div class="rcWrapper">
				<ul>
					<li class="fondoInicio">
						<section class="container">
							<div class="content-a inicio">
								<div class="content-b">
									<div class="row">
										<div class="col-xs-offset-1 col-xs-10">
											<img src="{{ url() }}/img/diviertete.png" alt="" class="wow bounceInUp img-responsive center-block" data-wow-delay="0.5s">
										</div>
									</div>
								</div>
							</div>
						</section>
					</li>
					<li class="fondoVideo">
						<div class="content-a">
							<div class="content-b">
								<div class="row">
									<div class="col-xs-offset-1 col-xs-10">
										<a href="https://www.youtube.com/watch?v=OXmN2KVFRtI" target="_blank">
											<img src="{{ url() }}/img/play.png" alt="" class="boton play">
										</a>
									</div>
								</div>

							</div>
						</div>
					</li>
					<li class="fondoDivierteteMobile">
						<div class="row">
							<div class="col-xs-offset-2 col-xs-8">
								<p class="diviertete">
									<br>
									<img class="img-responsive center-block" src="{{ url() }}/img/chicas-index-mobile.png" alt="">
									<br>
									<img class="img-responsive center-block" src="{{ url() }}/img/diviertete-jugando.png" alt="">
									<br>
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<p class="diviertete">
									<strong>
										Juega con la moda para crear tu propio estilo único y original.
									</strong>
									<br><br>
									Mezcla, fusiona y diviértete con tus amigas probando cosas nuevas. Estilo tomboy, cuadros, zapatos de aire masculino…
									<br>
									¡Las reglas las pones tú!
								</p>
							</div>
						</div>
					</li>
					<li class="fondoLookbook">
						<div class="content-a">
							<div class="content-b">
								<div class="row">
									<div class="col-xs-6">
										<a class="prenda" href="#casaca-moto-vestido-funky" rel="grupo1">
											<img src="{{ url() }}/img/prendas/miniaturas/lookbook-1.png" alt="" class="center-block img-responsive">
										</a>
									</div>
									<div class="col-xs-6">
										<a class="prenda" href="#blusa-penta" rel="grupo1">
											<img src="{{ url() }}/img/prendas/miniaturas/lookbook-2.png" alt="" class="center-block img-responsive">
										</a>
									</div>
								</div>
								<img src="{{url()}}/img/blank.png" height="120px" alt="" class="center-block">
								<div class="row">
									<div class="col-xs-6">
										<a class="prenda" href="#chompa-pelu" rel="grupo1">
											<img src="{{ url() }}/img/prendas/miniaturas/lookbook-3.png" alt="" class="center-block img-responsive">
										</a>
									</div>
									<div class="col-xs-6">
										<a class="prenda" href="#chompa-parky-jean-brito" rel="grupo1">
											<img src="{{ url() }}/img/prendas/miniaturas/lookbook-4.png" alt="" class="center-block img-responsive">
										</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="fondoLookbook">
						<div class="content-a">
							<div class="content-b">
								<div class="row">
									<div class="col-xs-6">
										<a class="prenda" href="#chompa-moti" rel="grupo2">
											<img src="{{ url() }}/img/prendas/miniaturas/lookbook-5.png" alt="" class="center-block img-responsive">
										</a>
									</div>
									<div class="col-xs-6">
										<a class="prenda" href="#poncho-florence" rel="grupo2">
											<img src="{{ url() }}/img/prendas/miniaturas/lookbook-6.png" alt="" class="center-block img-responsive">
										</a>
									</div>
								</div>
								<img src="{{url()}}/img/blank.png" height="120px" alt="" class="center-block">
								<div class="row">
									<div class="col-xs-6">
										<a class="prenda" href="#chompa-huge" rel="grupo2">
											<img src="{{ url() }}/img/prendas/miniaturas/lookbook-7.png" alt="" class="center-block img-responsive">
										</a>
									</div>
									<div class="col-xs-6">
										<a class="prenda" href="#blazer-long-polo-boy-short-rice" rel="grupo2">
											<img src="{{ url() }}/img/prendas/miniaturas/lookbook-8.png" alt="" class="center-block img-responsive">
										</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="fondoLookbook">
						<div class="content-a">
							<div class="content-b">
								<div class="row">
									<div class="col-xs-6">
										<a class="prenda" href="#camisa-gamuza-falda-midi" rel="grupo3">
											<img src="{{ url() }}/img/prendas/miniaturas/lookbook-9.png" alt="" class="center-block img-responsive">
										</a>
									</div>
									<div class="col-xs-6">
										<a class="prenda" href="#blusa-aias" rel="grupo3">
											<img src="{{ url() }}/img/prendas/miniaturas/lookbook-10.png" alt="" class="center-block img-responsive">
										</a>
									</div>
								</div>
								<img src="{{url()}}/img/blank.png" height="120px" alt="" class="center-block">
								<div class="row">
									<div class="col-xs-6">
										<a class="prenda" href="#chompa-longy-falda-tubo" rel="grupo3">
											<img src="{{ url() }}/img/prendas/miniaturas/lookbook-11.png" alt="" class="center-block img-responsive">
										</a>
									</div>
									<div class="col-xs-6">
										<a class="prenda" href="#polo-crop-leggins-textu" rel="grupo3">
											<img src="{{ url() }}/img/prendas/miniaturas/lookbook-12.png" alt="" class="center-block img-responsive">
										</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="fondoLookbook">
						<div class="content-a">
							<div class="content-b">
								<div class="row">
									<div class="col-xs-6">
										<a class="prenda" href="#blusa-checks" rel="grupo4">
											<img src="{{ url() }}/img/prendas/miniaturas/lookbook-13.png" alt="" class="center-block img-responsive">
										</a>
									</div>
									<div class="col-xs-6">
										<a class="prenda" href="#chompa-grandma-vestido-led" rel="grupo4">
											<img src="{{ url() }}/img/prendas/miniaturas/lookbook-14.png" alt="" class="center-block img-responsive">
										</a>
									</div>
								</div>
								<img src="{{url()}}/img/blank.png" height="120px" alt="" class="center-block">
								<div class="row">
									<div class="col-xs-6">
										<a class="prenda" href="#casaca-size" rel="grupo4">
											<img src="{{ url() }}/img/prendas/miniaturas/lookbook-15.png" alt="" class="center-block img-responsive">
										</a>
									</div>
									<div class="col-xs-6">
										<a class="prenda" href="#chompa-moti-polo-crop-short-rice" rel="grupo4">
											<img src="{{ url() }}/img/prendas/miniaturas/lookbook-16.png" alt="" class="center-block img-responsive">
										</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="fullscreen-video-pasarela">
						<section class="container">
							<div class="content-a inicio">
								<div class="content-b">
									&nbsp;
								</div>
							</div>
						</section>
					</li>
					<li class="fondoParticipa participa">
						<div class="content-a">
							<div class="content-b">
								<p class="text-left">
									<img src="{{ url() }}/img/boton-comercial.png" alt="" class="boton comercial">
									<br>
									<img src="{{ url() }}/img/boton-makingof.png" alt="" class="boton makingof">
									<br>
									<img src="{{ url() }}/img/boton-catalogo.png" alt="" class="boton catalogo">
									<br>
									<img src="{{ url() }}/img/boton-registrate.png" alt="" class="boton registro">
								</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<a><img class="rcL" src="{{ url() }}/img/flecha.png" alt=""></a>
			<a><img class="rcR" src="{{ url() }}/img/flecha.png" alt=""></a>
			<footer>
				<img src="{{ url() }}/img/logo-index.png" alt="INDEX">
			</footer>
		</div>

		<div id="registro" style="display:none">
			<img src="{{ url() }}/img/diviertete.jpg" alt="" class="center-block img-responsive">
			<p class="registra center-block">REGISTRA TUS DATOS</p>
			<form id="formRegistro" class="center-block">
				<input type="hidden" name="info" value="todos" id="info">
				<div>
					<label for="nombre">NOMBRE:</label><input name="nombre" type="text" id="nombre" class="inputbox" maxlength="100">
				</div>
				<div>
					<label for="email">MAIL:</label><input name="email" type="email" id="email" class="inputbox" maxlength="100">
				</div>
				<div>
					<label for="telefono">TELÉFONO:</label><input name="telefono" type="tel" id="telefono" class="inputbox" maxlength="50">
				</div>
				<p class="center-block text-center">
					<small>DESEO RECIBIR INFORMACIÓN DE RIPLEY &nbsp;&nbsp;&nbsp;&nbsp;</small><img src="{{ url() }}/img/check.jpg" class="boton deseo" data-valor="0" alt="">
				</p>
				<div>
					<input type="image" src="{{ url() }}/img/boton-registrarme.jpg" id="registrar" class="center-block">
				</div>
			</form>
		</div>
		
		<div id="catalogo" style="display:none">
			<div data-configid="7354832/11299613" style="width:100%; height:300px;" class="issuuembed"></div><script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
		</div>

		<div class="bloque" id="casaca-moto-vestido-funky" style="display:none">
			<p>
				<img src="{{ url() }}/img/prendas/casaca-moto-vestido-funky.jpg" class="img-responsive center-block" alt="">
				casaca moto<br>
				<strong>S/.99.90</strong> - <small>16306362</small><br>
				vestido funky<br>
				<strong>S/.79.90</strong> - <small>16392266</small>
			</p>
			<br>
			<p class="sociales">
				<img src="{{url()}}/img/compartir.jpg" alt="">&nbsp;
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://indexmoda.com/lookbook1/casaca-moto-vestido-funky" class="facebook"><img src="{{url()}}/img/compartir-facebook.jpg" alt="">&nbsp;</a>
				<a target="_blank" href="https://twitter.com/home?status=%C2%A1Me%20fascinaron%20estos%20productos%20INDEX!%20casaca%20moto%20S/.99.90%20vestido%20funky%20S/.79.90%20http://bit.ly/1F9Wq9Q%20%23indexmoda%20%23diviertete" class="twitter"><img src="{{url()}}/img/compartir-twitter.jpg" alt="">&nbsp;</a>
			</p>
		</div>
		<div class="bloque" id="blusa-penta" style="display:none">
			<p>
				<img src="{{ url() }}/img/prendas/blusa.jpg" class="img-responsive center-block" alt="">
				blusa penta<br>
				<strong>S/.39.90</strong> - <small>16262170</small>
			</p>
			<br>
			<p class="sociales">
				<img src="{{url()}}/img/compartir.jpg" alt="">&nbsp;
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://indexmoda.com/lookbook1/blusa-penta" class="facebook"><img src="{{url()}}/img/compartir-facebook.jpg" alt="">&nbsp;</a>
				<a target="_blank" href="https://twitter.com/home?status=%C2%A1Me%20fascin%C3%B3%20este%20producto%20INDEX!%20blusa%20penta%20S/.39.90%20http://bit.ly/1xAnaKJ%20%23indexmoda%20%23diviertete" class="twitter"><img src="{{url()}}/img/compartir-twitter.jpg" alt="">&nbsp;</a>
			</p>
			<div class="clearfix"></div>
		</div>
		<div class="bloque" id="chompa-pelu" style="display:none">
			<p>
				<img src="{{ url() }}/img/prendas/chompa-pelu.jpg" class="img-responsive center-block" alt="">
				chompa pelu<br>
				<strong>S/. 49.90</strong> - <small>16503024</small>
			</p>
			<br>
			<p class="sociales">
				<img src="{{url()}}/img/compartir.jpg" alt="">&nbsp;
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://indexmoda.com/lookbook1/chompa-pelu" class="facebook"><img src="{{url()}}/img/compartir-facebook.jpg" alt="">&nbsp;</a>
				<a target="_blank" href="https://twitter.com/home?status=%C2%A1Me%20fascin%C3%B3%20este%20producto%20INDEX!%20chompa%20pelu%20S/.49.90%20http://bit.ly/1zce3jR%20%23indexmoda%20%23diviertete" class="twitter"><img src="{{url()}}/img/compartir-twitter.jpg" alt="">&nbsp;</a>
			</p>
		</div>
		<div class="bloque" id="chompa-parky-jean-brito" style="display:none">
			<p>
				<img src="{{ url() }}/img/prendas/chompa-parky-jean-brito.jpg" class="img-responsive center-block" alt="">
				chompa parky<br>
				<strong>S/. 159</strong> - <small>16306133</small><br>
				jean brito<br>
				<strong>S/. 119</strong> - <small>16395258</small>
			</p>
			<br>
			<p class="sociales">
				<img src="{{url()}}/img/compartir.jpg" alt="">&nbsp;
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://indexmoda.com/lookbook1/chompa-parky-jean-brito" class="facebook"><img src="{{url()}}/img/compartir-facebook.jpg" alt="">&nbsp;</a>
				<a target="_blank" href="https://twitter.com/home?status=%C2%A1Me%20fascinaron%20estos%20productos%20INDEX!%20chompa%20parky%20S/.159%20jean%20brito%20S/.119%20http://bit.ly/1v1CiRf%20%23indexmoda%20%23diviertete" class="twitter"><img src="{{url()}}/img/compartir-twitter.jpg" alt="">&nbsp;</a>
			</p>
		</div>
		<div class="bloque" id="chompa-moti" style="display:none">
            <p>
                <img src="{{ url() }}/img/prendas/chompa-moti.jpg" class="img-responsive center-block" alt="">
				chompa moti<br>
				<strong>S/. 69.90</strong> - <small>16508867</small>
            </p>
			<br>
			<p class="sociales">
				<img src="{{url()}}/img/compartir.jpg" alt="">&nbsp;
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://indexmoda.com/lookbook2/chompa-moti" class="facebook"><img src="{{url()}}/img/compartir-facebook.jpg" alt="">&nbsp;</a>
				<a target="_blank" href="https://twitter.com/home?status=%C2%A1Me%20fascin%C3%B3%20este%20producto%20INDEX!%20chompa%20moti%20S/.69.90%20http://bit.ly/1zD3vxG%20%23indexmoda%20%23diviertete" class="twitter"><img src="{{url()}}/img/compartir-twitter.jpg" alt="">&nbsp;</a>
			</p>
        </div>
        <div class="bloque" id="poncho-florence" style="display:none">
            <p>
                <img src="{{ url() }}/img/prendas/poncho-florence.jpg" class="img-responsive center-block" alt="">
				poncho florence<br>
				<strong>S/. 59.90</strong> - <small>16391005</small>
            </p>
			<br>
			<p class="sociales">
				<img src="{{url()}}/img/compartir.jpg" alt="">&nbsp;
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://indexmoda.com/lookbook2/poncho-florence" class="facebook"><img src="{{url()}}/img/compartir-facebook.jpg" alt="">&nbsp;</a>
				<a target="_blank" href="https://twitter.com/home?status=%C2%A1Me%20fascin%C3%B3%20este%20producto%20INDEX!%20poncho%20florence%20S/.59.90%20http://bit.ly/16kL5Hx%20%23indexmoda%20%23diviertete" class="twitter"><img src="{{url()}}/img/compartir-twitter.jpg" alt="">&nbsp;</a>
			</p>
        </div>
        <div class="bloque" id="chompa-huge" style="display:none">
            <p>
                <img src="{{ url() }}/img/prendas/chompa-huge.jpg" class="img-responsive center-block" alt="">
				chompa huge<br>
				<strong>S/. 79.90</strong> - <small>16610239</small>
            </p>
			<br>
			<p class="sociales">
				<img src="{{url()}}/img/compartir.jpg" alt="">&nbsp;
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://indexmoda.com/lookbook2/chompa-huge" class="facebook"><img src="{{url()}}/img/compartir-facebook.jpg" alt="">&nbsp;</a>
				<a target="_blank" href="https://twitter.com/home?status=%C2%A1Me%20fascin%C3%B3%20este%20producto%20INDEX!%20chompa%20huge%20S/.79.90%20http://bit.ly/16GMppp%20%23indexmoda%20%23diviertete" class="twitter"><img src="{{url()}}/img/compartir-twitter.jpg" alt="">&nbsp;</a>
			</p>
        </div>
        <div class="bloque" id="blazer-long-polo-boy-short-rice" style="display:none">
            <p>
                <img src="{{ url() }}/img/prendas/blazer-long-polo-boy-short-rice.jpg" class="img-responsive center-block" alt="">
				blazer long<br>
				<strong>S/. 129</strong> - <small>16398334</small><br>
				polo boy<br>
				<strong>S/. 39.90</strong> - <small>16537712</small><br>
				short rice<br>
				<strong>S/. 79.90</strong> - <small>16680791</small>
            </p>
			<br>
			<p class="sociales">
				<img src="{{url()}}/img/compartir.jpg" alt="">&nbsp;
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://indexmoda.com/lookbook2/blazer-long-polo-boy-short-rice" class="facebook"><img src="{{url()}}/img/compartir-facebook.jpg" alt="">&nbsp;</a>
				<a target="_blank" href="https://twitter.com/home?status=%C2%A1Me%20fascinaron%20estos%20productos%20INDEX!%20blazer%20long%20S/.129%20polo%20boy%20S/.39.90%20short%20rice%20S/.79.90%20http://bit.ly/1BXxE9j%20%23indexmoda%20%23diviertete" class="twitter"><img src="{{url()}}/img/compartir-twitter.jpg" alt="">&nbsp;</a>
			</p>
        </div>
		<div class="bloque" id="camisa-gamuza-falda-midi" style="display:none">
            <p>
                <img src="{{ url() }}/img/prendas/camisa-gamuza-falda-midi.jpg" class="img-responsive center-block" alt="">
				camisa gamuza<br>
				<strong>S/. 179</strong> - <small>16608874</small><br>
				falda midi<br>
				<strong>S/. 59.90</strong> - <small>16455743</small>
            </p>
			<br>
			<p class="sociales">
				<img src="{{url()}}/img/compartir.jpg" alt="">&nbsp;
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://indexmoda.com/lookbook3/camisa-gamuza-falda-midi" class="facebook"><img src="{{url()}}/img/compartir-facebook.jpg" alt="">&nbsp;</a>
				<a target="_blank" href="https://twitter.com/home?status=%C2%A1Me%20fascinaron%20estos%20productos%20INDEX!%20camisa%20gamuza%20S/.179%20falda%20midi%20S/.59.90%20http://bit.ly/1xrljYo%20%23indexmoda%20%23diviertete" class="twitter"><img src="{{url()}}/img/compartir-twitter.jpg" alt="">&nbsp;</a>
			</p>
        </div>
        <div class="bloque" id="blusa-aias" style="display:none">
            <p>
                <img src="{{ url() }}/img/prendas/blusa-aias.jpg" class="img-responsive center-block" alt="">
				blusa aias<br>
				<strong>S/. 49.90</strong> - <small>16280798</small>
            </p>
			<br>
			<p class="sociales">
				<img src="{{url()}}/img/compartir.jpg" alt="">&nbsp;
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://indexmoda.com/lookbook3/blusa-aias" class="facebook"><img src="{{url()}}/img/compartir-facebook.jpg" alt="">&nbsp;</a>
				<a target="_blank" href="https://twitter.com/home?status=%C2%A1Me%20fascin%C3%B3%20este%20producto%20INDEX!%20blusa%20aias%20S/.49.90%20http://bit.ly/16uKB24%20%23indexmoda%20%23diviertete" class="twitter"><img src="{{url()}}/img/compartir-twitter.jpg" alt="">&nbsp;</a>
			</p>
        </div>
        <div class="bloque" id="chompa-longy-falda-tubo" style="display:none">
            <p>
                <img src="{{ url() }}/img/prendas/chompa-longy-falda-tubo.jpg" class="img-responsive center-block" alt="">
				chompa longy<br>
				<strong>S/. 69.90</strong> - <small>16610232</small><br>
				falda tubo<br>
				<strong>S/. 89.90</strong> - <small>16680809</small>
            </p>
			<br>
			<p class="sociales">
				<img src="{{url()}}/img/compartir.jpg" alt="">&nbsp;
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://indexmoda.com/lookbook3/chompa-longy-falda-tubo" class="facebook"><img src="{{url()}}/img/compartir-facebook.jpg" alt="">&nbsp;</a>
				<a target="_blank" href="https://twitter.com/home?status=%C2%A1Me%20fascinaron%20estos%20productos%20INDEX!%20chompa%20longy%20S/.69.90%20falda%20tubo%20S/.89.90%20http://bit.ly/16uKGma%20%23indexmoda%20%23diviertete" class="twitter"><img src="{{url()}}/img/compartir-twitter.jpg" alt="">&nbsp;</a>
			</p>
        </div>
        <div class="bloque" id="polo-crop-leggins-textu" style="display:none">
            <p>
                <img src="{{ url() }}/img/prendas/polo-crop-leggins-textu.jpg" class="img-responsive center-block" alt="">
				polo crop<br>
				<strong>S/. 39.90</strong> - <small>16290493</small><br>
				leggins textu<br>
				<strong>S/. 69.90</strong> - <small>16503951</small>
            </p>
			<br>
			<p class="sociales">
				<img src="{{url()}}/img/compartir.jpg" alt="">&nbsp;
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://indexmoda.com/lookbook3/polo-crop-leggins-textu" class="facebook"><img src="{{url()}}/img/compartir-facebook.jpg" alt="">&nbsp;</a>
				<a target="_blank" href="https://twitter.com/home?status=%C2%A1Me%20fascinaron%20estos%20productos%20INDEX!%20polo%20crop%20S/.39.90%20leggins%20texty%20S/.69.90%20http://bit.ly/1EJcFxh%20%23indexmoda%20%23diviertete" class="twitter"><img src="{{url()}}/img/compartir-twitter.jpg" alt="">&nbsp;</a>
			</p>
        </div>
		<div class="bloque" id="casaca-size" style="display:none">
            <p>
                <img src="{{ url() }}/img/prendas/casaca-size.jpg" class="img-responsive center-block" alt="">
				casaca size<br>
				<strong>S/. 159</strong> - <small>16290493</small>
            </p>
			<br>
			<p class="sociales">
				<img src="{{url()}}/img/compartir.jpg" alt="">&nbsp;
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://indexmoda.com/lookbook4/casaca-size" class="facebook"><img src="{{url()}}/img/compartir-facebook.jpg" alt="">&nbsp;</a>
				<a target="_blank" href="https://twitter.com/home?status=%C2%A1Me%20fascin%C3%B3%20este%20producto%20INDEX!%20casaca%20size%20S/.159%20http://bit.ly/1FabXXd%20%23indexmoda%20%23diviertete" class="twitter"><img src="{{url()}}/img/compartir-twitter.jpg" alt="">&nbsp;</a>
			</p>
        </div>
        <div class="bloque" id="blusa-checks" style="display:none">
            <p>
                <img src="{{ url() }}/img/prendas/blusa-checks.jpg" class="img-responsive center-block" alt="">
				blusa checks<br>
				<strong>S/. 49.90 </strong> - <small>16451241</small>
            </p>
			<br>
			<p class="sociales">
				<img src="{{url()}}/img/compartir.jpg" alt="">&nbsp;
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://indexmoda.com/lookbook4/blusa-checks" class="facebook"><img src="{{url()}}/img/compartir-facebook.jpg" alt="">&nbsp;</a>
				<a target="_blank" href="https://twitter.com/home?status=%C2%A1Me%20fascin%C3%B3%20este%20producto%20INDEX!%20blusa%20checks%20S/.49.90%20http://bit.ly/1ueS3t5%20%23indexmoda%20%23diviertete" class="twitter"><img src="{{url()}}/img/compartir-twitter.jpg" alt="">&nbsp;</a>
			</p>
        </div>
        <div class="bloque" id="chompa-grandma-vestido-led" style="display:none">
            <p>
                <img src="{{ url() }}/img/prendas/chompa-grandma-vestido-led.jpg" class="img-responsive center-block" alt="">
				chompa grandma<br>
				<strong>S/. 99.90 </strong> - <small>166507443</small><br>
				vestido led<br>
				<strong>S/. 99.90 </strong> - <small>16694645</small>
			</p>
			<br>
			<p class="sociales">
				<img src="{{url()}}/img/compartir.jpg" alt="">&nbsp;
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://indexmoda.com/lookbook4/chompa-grandma-vestido-led" class="facebook"><img src="{{url()}}/img/compartir-facebook.jpg" alt="">&nbsp;</a>
				<a target="_blank" href="https://twitter.com/home?status=%C2%A1Me%20fascinaron%20estos%20productos%20INDEX!%20chompa%20grandma%20S/.99.90%20vestido%20led%20S/.99.90%20http://bit.ly/1D2cxqv%20%23indexmoda%20%23diviertete" class="twitter"><img src="{{url()}}/img/compartir-twitter.jpg" alt="">&nbsp;</a>
			</p>
        </div>
        <div class="bloque" id="chompa-moti-polo-crop-short-rice" style="display:none">
            <p>
                <img src="{{ url() }}/img/prendas/chompa-moti-polo-crop-short-rice.jpg" class="img-responsive center-block" alt="">
				chompa moti<br>
				<strong>S/. 69.90 </strong> - <small>16508867</small><br>
				polo crop<br>
				<strong>S/. 39.90 </strong> - <small>16290493</small><br>
				short rice<br>
				<strong>S/. 79.90 </strong> - <small>16680791</small>
            </p>
			<br>
			<p class="sociales">
				<img src="{{url()}}/img/compartir.jpg" alt="">&nbsp;
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://indexmoda.com/lookbook4/chompa-moti-polo-crop-short-rice" class="facebook"><img src="{{url()}}/img/compartir-facebook.jpg" alt="">&nbsp;</a>
				<a target="_blank" href="https://twitter.com/home?status=%C2%A1Me%20fascinaron%20estos%20productos%20INDEX!%20chompa%20moti%20S/.69.9%20polo%20crop%20S/.39.9%20short%20rice%20S/.79.9%20http://bit.ly/1zcnwYg%20%23indexmoda%20%23diviertete" class="twitter"><img src="{{url()}}/img/compartir-twitter.jpg" alt="">&nbsp;</a>
			</p>
        </div>
	</body>
</html>