<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarAutor;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class controladorBD extends Controller
{
    public function index()
    {
        $consultaAutor=DB::table('tb_autores')->get();

        return view("consultarAut",compact('consultaAutor'));
    }

    public function create()
    {
        //
    }

    public function store(validarAutor $request)
    {
        DB::table('tb_autores')->insert([
            "Nombre" => $request -> input('txtName'),
            "fecha" => Carbon::now(),
            "libros" => $request -> input('number'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        return redirect('registrarAut')->with('autorizo','Agregado Correctamente');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
