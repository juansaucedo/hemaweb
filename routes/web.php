<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'Welcome')->name('inicio');

Route::get('/productos/', function () {
    $lineas = \App\LineaDeArticulos::all();
    $colLineas = 4;
    return view ('lineas', ["lineas" => $lineas, "colLineas" => $colLineas]);
    // return view('productos');
})->name('productos');

// Route::get('/productos/{id}', '\App\ArticlesFind@byLine')->name('productos');
Route::get('productos/{id}/pagina/{page}/', 'ArticlesFind@byLine')->name('productoslinea');

Route::get('/renta', function () {
    return view('renta');
})->name('renta');

Route::get('/otro', function () {
    return view('otro');
})->name('otro');

Route::get('/reparacion', function () {
    return view('reparacion');
})->name('reparacion');

Route::get('/roscas-y-corte', function () {
    return view('roscas-y-corte');
})->name('roscas-y-corte');

Route::get('/bolsa-de-trabajo', function () {
    return view('bolsa-de-trabajo');
})->name('bolsa-de-trabajo');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/producto', function () {
    return view('producto');
})->name('producto');

Route::get('/linea/insert', function() {
    App\LineaDeArticulos::create(array('name' => 'test', 'id_microsip' => '012test'));
    return "saved";
});