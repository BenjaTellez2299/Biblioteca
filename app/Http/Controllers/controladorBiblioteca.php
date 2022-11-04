<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarLibro;
use Illuminate\Http\Request;

class controladorBiblioteca extends Controller
{
    public function registrarLibro(validarLibro $req){
        return redirect('registrar')
        ->with('autorizo','Se guardo correctamente')
        ->with('txtTitu', $req->txtTitu);
    }

    public function showInicio(){
        return view('inicio');
    }

    public function showRegistrar(){
        return view('registrar');
    }
    
}
