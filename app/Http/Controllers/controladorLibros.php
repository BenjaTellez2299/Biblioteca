<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarLibro;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class controladorLibros extends Controller
{

    public function index()
    {
        $consultaLibro=DB::select('SELECT * FROM tb_libros L INNER JOIN tb_autores A ON A.idAutor = L.idautor');
        $consultaAutores=DB::table('tb_autores')->get();

        return view("consultarLib",compact('consultaLibro','consultaAutores'));
    }

    public function create()
    {
        //
    }

    public function store(validarLibro $request)
    {
        DB::table('tb_libros')->insert([
            "idautor" => $request -> input('txtAutor'),
            "isbn" => $request -> input('txtISBN'),
            "titulo" => $request -> input('txtTitu'),
            "paginas" => $request -> input('txtPag'),
            "editorial" => $request -> input('txtEdit'),
            "correo" => $request -> input('txtEmail'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        return redirect('registrarLib')->with('autorizo','Agregado Correctamente');
    }

    public function show()
    {
        $consultaAutor=DB::select('SELECT idAutor,Nombre FROM tb_autores');

        return view("registrarLib",compact('consultaAutor'));
    }

    public function edit($id)
    {
        $consultaId=DB::select('SELECT * FROM tb_libros L INNER JOIN tb_autores A ON A.idAutor = L.idautor');

        return $consultaId;
    }

    public function update(validarLibro $request, $id)
    {
        DB::table('tb_libros')->where('idLibro',$id)->update([
            "isbn" => $request -> input('txtISBN'),
            "titulo" => $request -> input('txtTitu'),
            "idautor" => $request -> input('txtAutor'),
            "paginas" => $request -> input('txtPag'),
            "editorial" => $request -> input('txtEdit'),
            "correo" => $request -> input('txtEmail'),
            "updated_at" => Carbon::now()
        ]);

        return redirect('libro')->with('actualizo','Autor Actualizado Correctamente');
    }

    public function destroy($id)
    {
        DB::table('tb_libros')->where('idLibro',$id)->delete();

        return redirect('libro')->with('eliminar','Autor Eliminado Correctamente');
    }
}
