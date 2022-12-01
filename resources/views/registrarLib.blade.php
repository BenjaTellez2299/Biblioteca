
@extends('plantilla')

@section('contenido')

    <p class="fs-1">Registro Biblioteca</p>
    <p class="fs-5">Formulario de nuevos libros</p>

    @if(session()->has('autorizo'))
        {!!"<script>
            Swal.fire(
            'Todo Correcto! {$libro}',
            'El Libro {$libro} se guardo correctamente!',
            'success')
        </script>"!!}
    @endif

    <div class="container">

<!-- ERROR INCOMPLETO -->
@if($errors->any())

    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        Checa tus Datos el Error es: {{$error}}
    </div>
    @endforeach

@endif

<!-- FORMULARIO -->
    <form class="m-2" method="post" action="{{route('libro.store')}}">

<!-- TOKEN -->
    @csrf
        <!-- ISBN -->        
        <div class="form-floating mb-3">
            <input type="number" class="form-control" name="txtISBN" value="{{ old('txtISBN') }}">
            <label for="floatingInput">ISBN</label>
                <p class="fst-italic text-danger">
                    {{ $errors->first('txtISBN') }}
                </p>
        </div>
        <!-- TITULO -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="txtTitu" value="{{ old('txtTitu') }}">
            <label for="floatingInput">Título del Libro</label>
                <p class="fst-italic text-danger">
                    {{ $errors->first('txtTitu') }}
                </p>
        </div>
        <!-- AUTOR -->
        <label for="floatingInput">Autor del Libro</label>
        <div class="form-floating mb-3">
            <select class="form-select" aria-label="Default select example">
                <option selected disabled>Seleccione un autor...</option>
                @foreach($consultaAutor as $consulta)
                <option name="txtAutor" value="{{$consulta->idAutor}}">{{$consulta->Nombre}}</option>
                @endforeach
            </select>
        </div>
        <!-- PÁGINAS -->
        <div class="form-floating mb-3">
            <input type="number" class="form-control" name="txtPag" value="{{ old('txtPag') }}">
            <label for="floatingInput">Número de Páginas</label>
                <p class="fst-italic text-danger">
                    {{ $errors->first('txtPag') }}
                </p>
        </div>
        <!-- EDITORIAL -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="txtEdit" value="{{ old('txtEdit') }}">
            <label for="floatingInput">Editorial del Libro</label>
                <p class="fst-italic text-danger">
                    {{ $errors->first('txtEdit') }}
                </p>
        </div>
        <!-- EMAIL -->
        <div class="form-floating mb-3">
            <input type="email" class="form-control" name="txtEmail" value="{{ old('txtEmail') }}">
            <label for="floatingInput">Email Editorial</label>
                <p class="fst-italic text-danger">
                    {{ $errors->first('txtEmail') }}
                </p>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success m-2">Ingresar Datos del Libro</button>
        </div>
            
    </form> 
   
    </div>    

@stop
