<?php

use App\Http\Controllers\TestController;
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

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/modulo_institucional', function () {
    return view('sistema_aplicacion_institucional');
});

Route::get('/monitoreo_seguimiento', function () {
    return view('monitoreo_seguimiento');
});

Route::get('/cuestionario1', function () {
    return view('cuestionarios.cuestionario1');
});

Route::get('/modulo_integral', function () {
    return view('modulo_integral');
});


Route::get('/test', [TestController::class, 'show']);
Route::post('/saveTest', [TestController::class, 'save']);
Route::get('/validateUser', [TestController::class, 'validateUser']);
