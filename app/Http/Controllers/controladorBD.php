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
        $consultaId= DB::table('tb_autores')->where('idAutor', $id)->first();

        return view('ModalActualizarAutor', compact('consultaId'));
    }

    public function update(validarAutor $request, $id)
    {
        DB::table('tb_autores')->where('idAutor',$id)->update([
            "Nombre" => $request -> input('txtName'),
            "fecha" => $request -> input('date'),
            "libros" => $request -> input('number'),
            "updated_at" => Carbon::now()
        ]);

        return redirect('autor')->with('actualizo','Autor Actualizado Correctamente');
    }

    public function destroy($id)
    {
        DB::table('tb_autores')->where('idAutor',$id)->delete();

        return redirect('autor')->with('eliminar','Autor Eliminado Correctamente');
    }
}
