
@extends('plantilla')

@section('contenido')

    @if(session()->has('autorizo'))
    <?php $libro = session()->get('txtTitu') ?>
        {!!"<script>
            Swal.fire(
            'Todo Correcto! {$libro}',
            'El Libro {$libro} se guardo correctamente!',
            'success')
        </script>"!!}
    @endif

    <p class="fs-1">Registro Biblioteca</p>
    <p class="fs-5">Formulario de nuevos libros</p>

    <div class="container">

<!-- ERROR INCOMPLETO -->
    @if($errors->any())

            @foreach($errors->all() as $error)
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
            </svg>

            <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    Checa tus Datos!
                </div>
            </div>
            @endforeach

    @endif

<!-- FORMULARIO -->
    <form class="m-2" method="post" action="RegistrarLibro">

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
            <button type="submit" class="btn btn-success m-2">Ingresar Datos del Libro</button>
        </div>
            
    </form> 
   
    </div>    

@stop
