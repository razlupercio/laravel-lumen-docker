<?php

use App\Http\Controllers\PostController;
/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/*
$router->get('/', function () use ($router) {
    return $router->app->version();
});
*/

$router->get('/', function () use ($router) {
  return view('factura');
});

$router->get('/factura', 'PostController@create');
$router->post('/add', 'PostController@store');


$router->get('/facturama', 'FacturamaController@index');
$router->get('/view', 'PostController@getFactura');
