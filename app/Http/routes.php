<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/por-que-existimos', 'PorQueExistimos@pagina');
Route::get('/como-fazemos', 'ComoFazemos@pagina');
Route::get('/quem-somos', 'QuemSomosController@pagina');
Route::get('/nossos-clientes', 'NossosClientesController@pagina');
Route::get('/depoimentos/{id}', 'NossosClientesController@depoimentos');
Route::get('/fale-conosco/{sucess}', 'FaleConoscoController@pagina');
Route::get('/fale-conosco/', 'FaleConoscoController@pagina');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
