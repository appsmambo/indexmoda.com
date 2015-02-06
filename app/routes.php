<?php

Route::get('/', 'HomeController@verPagina');

/*Route::get('/', function()
{
	return View::make('inicio');
});*/

Route::get('/{pagina}', 'HomeController@verPagina')
	->where('pagina', 'inicio|comercial|diviertete|lookbook|lookbook1|lookbook2|lookbook3|lookbook4|pasarela|participa');

/*Route::get('/info/catalogo', function()
{
	return View::make('inicio');
});
*/

Route::get('/lookbook1/{url_prenda}', 'HomeController@verPrenda');
Route::get('/lookbook2/{url_prenda}', 'HomeController@verPrenda');
Route::get('/lookbook3/{url_prenda}', 'HomeController@verPrenda');
Route::get('/lookbook4/{url_prenda}', 'HomeController@verPrenda');

Route::post('/lookbook1/{url_prenda}', 'HomeController@ajaxVerPrenda');
Route::post('/lookbook2/{url_prenda}', 'HomeController@ajaxVerPrenda');
Route::post('/lookbook3/{url_prenda}', 'HomeController@ajaxVerPrenda');
Route::post('/lookbook4/{url_prenda}', 'HomeController@ajaxVerPrenda');

