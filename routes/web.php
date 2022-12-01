<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorBiblioteca;
use App\Http\Controllers\controladorBD;

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
        Route::get('registrarAut','showRegistrarAut')->name('showAut');
    }
);

//RUTAS ENVIO POST
Route::post('recuerdo',[controladorBD::class,'store'])->name('recuerdo.store');

//RUTAS CONSULTAR BD
Route::get('recuerdo',[controladorBD::class,'index'])->name('recuerdo.index');

//RUTA DEL UPDATE BD
Route::put('recuerdo/{id}',[controladorBD::class,'update'])->name('recuerdo.update');

//RUTA PARA BORRAR BD
Route::delete('recuerdo/{id}',[controladorBD::class,'destroy'])->name('recuerdo.destroy');

//RUTA FORMULARIO
Route::post('RegistrarLibro', [controladorBiblioteca::class, 'registrarLibro'])->name('regisLibro');
