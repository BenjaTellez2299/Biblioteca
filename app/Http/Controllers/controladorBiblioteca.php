<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarLibro;
use App\Http\Requests\validarAutor;
use Illuminate\Http\Request;

class controladorBiblioteca extends Controller
{
    public function registrarLibro(validarLibro $req){
        return redirect('registrar')
        ->with('autorizo','Se guardo correctamente')
        ->with('txtTitu', $req->txtTitu);
    }

    public function registrarAutor(validarAutor $req){
        return redirect('registrarAut')
        ->with('confirmo','Se guardo Correcto');
    }

    public function showInicio(){
        return view('inicio');
    }

    public function showRegistrar(){
        return view('registrar');
    }
    
    public function showRegistrarAut(){
        return view('registrarAut');
    }

}
