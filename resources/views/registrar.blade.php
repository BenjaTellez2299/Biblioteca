
@extends('plantilla')

@section('contenido')

<!-- MENSAJE SWEETALERT -->
@if(session()->has('confirmacion'))
        {!!"<script>
            Swal.fire(
            'Bien Hecho Chavo Cardenal!',
            'Preciona el botón para continuar!',
            'success')
        </script>"!!}
    @endif

    <p class="fs-1">Registro Biblioteca</p>
    <p class="fs-5">Formulario de nuevos libros</p>

    <div class="container">

<!-- ERROR INCOMPLETO -->
    @if($errors->any())

            @foreach($errors->all() as $error)

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Formulario Incompleto!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endforeach

    @endif

<!-- FORMULARIO -->
    <form class="m-2" method="post" action="GuardarForm">

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
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="txtAutor" value="{{ old('txtAutor') }}">
            <label for="floatingInput">Autor del Libro</label>
                <p class="fst-italic text-danger">
                    {{ $errors->first('txtAutor') }}
                </p>
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
            <button type="submit" class="btn btn-outline-success m-2">Ingresar Datos del Libro</button>
        </div>
            
    </form> 
   
    </div>    

@stop
