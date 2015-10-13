<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\HolaMon;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/helloworld', function () {

$model = new HolaMon();

$data["hola"] = $model->getString();
    return view("holamon", $data);
});
