<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorBiblioteca;
use App\Http\Controllers\controladorBD;
use App\Http\Controllers\controladorLibros;

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
        Route::get('registrarLib', 'showRegistrar')->name('apodoRegis');
        Route::get('registrarAut','showRegistrarAut')->name('showAut');
    }
);

//RUTAS ENVIO POST
Route::post('autor',[controladorBD::class,'store'])->name('autor.store');
Route::post('libro',[controladorLibros::class,'store'])->name('libro.store');

//RUTAS CONSULTAR BD
Route::get('autor',[controladorBD::class,'index'])->name('autor.index');
Route::get('registrarLib',[controladorLibros::class,'show'])->name('libro.show');
Route::get('libro',[controladorLibros::class,'index'])->name('libro.index');

//RUTA DEL UPDATE BD
Route::put('autor/{id}',[controladorBD::class,'update'])->name('autor.update');
Route::put('libro/{id}',[controladorLibros::class,'update'])->name('libro.update');

//RUTA PARA BORRAR BD
Route::delete('autor/{id}',[controladorBD::class,'destroy'])->name('autor.destroy');
Route::delete('libro/{id}',[controladorLibros::class,'destroy'])->name('libro.destroy');

//RUTA FORMULARIO
Route::post('RegistrarLibro', [controladorBiblioteca::class, 'registrarLibro'])->name('regisLibro');
