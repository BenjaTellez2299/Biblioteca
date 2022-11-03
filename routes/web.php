<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorBiblioteca;

//Route::get('/inicio', function () {
//    return view('inicio');
//});

//Route::get('/registrar', function () {
//    return view('registrar');
//});

//RUTAS PARA CONTROLADOR
route::controller(controladorBiblioteca::class)->group(
    function (){
        Route::get('inicio', 'showInicio')->name('apodoIni');
        Route::get('registrar', 'showRegistrar')->name('apodoRegis');
    }
);

//RUTA FORMULARIO
Route::post('RegistrarLibro', [controladorBiblioteca::class, 'registrarLibro'])->name('regisLibro');
