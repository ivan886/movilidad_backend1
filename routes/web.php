<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    return view('welcome');
});


Route::get('/tiempo', function () {
    
    $date = new DateTime("now", new DateTimeZone('America/Bogota') );
    return $date->format('Y-m-d H:i:s');
    
});



