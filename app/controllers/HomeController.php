<?php

class HomeController extends BaseController {
	
	private $_prendas;
	
	public function __construct()
	{
		$prendas = array(
			'casaca-moto-vestido-funky' => array(
				'texto' => '¡Me fascinaron estos productos INDEX! casaca moto S/.99.90 vestido funky S/.79.90 Descubre más en www.indexmoda.com #indexmoda #diviertete',
				'lookbook' => 'lookbook1',
				'url' => 'casaca-moto-vestido-funky',
				'imagen' => 'casaca-moto-vestido-funky.jpg'
			),
			'blusa-penta' => array(
				'texto' => '¡Me fascinó este producto INDEX! blusa penta S/.39.90 Descubre más en www.indexmoda.com #indexmoda #diviertete',
				'lookbook' => 'lookbook1',
				'url' => 'blusa-penta',
				'imagen' => 'blusa.jpg'
			),
			'chompa-pelu' => array(
				'texto' => '¡Me fascinó este producto INDEX! chompa pelu S/.49.90 Descubre más en www.indexmoda.com #indexmoda #diviertete',
				'lookbook' => 'lookbook1',
				'url' => 'chompa-pelu',
				'imagen' => 'chompa-pelu.jpg'
			),
			'chompa-parky-jean-brito' => array(
				'texto' => '¡Me fascinaron estos productos INDEX! chompa parky S/.159 jean brito S/.119 Descubre más en www.indexmoda.com #indexmoda #diviertete',
				'lookbook' => 'lookbook1',
				'url' => 'chompa-parky-jean-brito',
				'imagen' => 'chompa-parky-jean-brito.jpg'
			),
			'chompa-moti' => array(
				'texto' => '¡Me fascinó este producto INDEX! chompa moti S/.69.90 Descubre más en www.indexmoda.com #indexmoda #diviertete',
				'lookbook' => 'lookbook2',
				'url' => 'chompa-moti',
				'imagen' => 'chompa-moti.jpg'
			),
			'poncho-florence' => array(
				'texto' => '¡Me fascinó este producto INDEX! chompa florence S/.59.90 Descubre más en www.indexmoda.com #indexmoda #diviertete',
				'lookbook' => 'lookbook2',
				'url' => 'poncho-florence',
				'imagen' => 'poncho-florence.jpg'
			),
			'chompa-huge' => array(
				'texto' => '¡Me fascinó este producto INDEX! chompa huge S/.79.90 Descubre más en www.indexmoda.com #indexmoda #diviertete',
				'lookbook' => 'lookbook2',
				'url' => 'chompa-huge',
				'imagen' => 'chompa-huge.jpg'
			),
			'blazer-long-polo-boy-short-rice' => array(
				'texto' => '¡Me fascinaron estos productos INDEX! blazer long S/.129 polo boy S/.39.90 short rice S/.79.90 Descubre más en www.indexmoda.com #indexmoda #diviertete',
				'lookbook' => 'lookbook2',
				'url' => 'blazer-long-polo-boy-short-rice',
				'imagen' => 'blazer-long-polo-boy-short-rice.jpg'
			),
			'camisa-gamuza-falda-midi' => array(
				'texto' => '¡Me fascinaron estos productos INDEX! camisa gamuza S/.179 falda midi S/.59.90 Descubre más en www.indexmoda.com #indexmoda #diviertete',
				'lookbook' => 'lookbook3',
				'url' => 'camisa-gamuza-falda-midi',
				'imagen' => 'camisa-gamuza-falda-midi.jpg'
			),
			'blusa-aias' => array(
				'texto' => '¡Me fascinó este producto INDEX! blusa aias S/.49.90 Descubre más en www.indexmoda.com #indexmoda #diviertete',
				'lookbook' => 'lookbook3',
				'url' => 'blusa-aias',
				'imagen' => 'blusa-aias.jpg'
			),
			'chompa-longy-falda-tubo' => array(
				'texto' => '¡Me fascinaron estos productos INDEX! chompa longy S/.69.90 falda tubo S/.89.90 Descubre más en www.indexmoda.com #indexmoda #diviertete',
				'lookbook' => 'lookbook3',
				'url' => 'chompa-longy-falda-tubo',
				'imagen' => 'chompa-longy-falda-tubo.jpg'
			),
			'polo-crop-leggins-textu' => array(
				'texto' => '¡Me fascinaron estos productos INDEX! polo crop S/.39.90 leggins texty S/.69.90 Descubre más en www.indexmoda.com #indexmoda #diviertete',
				'lookbook' => 'lookbook3',
				'url' => 'polo-crop-leggins-textu',
				'imagen' => 'polo-crop-leggins-textu.jpg'
			),
			'casaca-size' => array(
				'texto' => '¡Me fascinó este producto INDEX! casaca size S/.159 Descubre más en www.indexmoda.com #indexmoda #diviertete',
				'lookbook' => 'lookbook4',
				'url' => 'casaca-size',
				'imagen' => 'casaca-size.jpg'
			),
			'blusa-checks' => array(
				'texto' => '¡Me fascinó este producto INDEX! blusa checks S/.49.90 Descubre más en www.indexmoda.com #indexmoda #diviertete',
				'lookbook' => 'lookbook4',
				'url' => 'blusa-checks',
				'imagen' => 'blusa-checks.jpg'
			),
			'chompa-grandma-vestido-led' => array(
				'texto' => '¡Me fascinaron estos productos INDEX! chompa grandma S/.99.90 vestido led S/.99.90 Descubre más en www.indexmoda.com #indexmoda #diviertete',
				'lookbook' => 'lookbook4',
				'url' => 'chompa-grandma-vestido-led',
				'imagen' => 'chompa-grandma-vestido-led.jpg'
			),
			'chompa-moti-polo-crop-short-rice' => array(
				'texto' => '¡Me fascinaron estos productos INDEX! chompa moti S/.69.90 polo crop S/.39.90 short rice S/.79.90 Descubre más en www.indexmoda.com #indexmoda #diviertete',
				'lookbook' => 'lookbook4',
				'url' => 'chompa-moti-polo-crop-short-rice',
				'imagen' => 'chompa-moti-polo-crop-short-rice.jpg'
			)
		);
		$this->_prendas = $prendas;
	}

	public function verPagina()
	{
		$esMobile = Agent::isAndroidOS() || Agent::isNexus() || Agent::isMobile() || Agent::isTablet();
		if ($esMobile)
			return View::make('mobile');
		else
			return View::make('desktop');
	}

	public function verPrenda($url_prenda = 'casaca-moto-vestido-funky') {
		$prenda = $this->_prendas[$url_prenda];
		if (Agent::isMobile())
			return View::make('mobile')->with('prenda', $prenda);
		else
			return View::make('desktop')->with('prenda', $prenda);
	}
	
}
