
@extends('plantilla')

@section('contenido')

    <p class="fs-1">Registrar Autores</p>
    <p class="fs-5">Formulario nuevo Autor</p>

<!-- AUTORIZO EL FORMULARIO -->    
    @if(session()->has('autorizo'))
        {!!"<script>
            Swal.fire(
            'Tu Autor se Guardo Correctamente!',
            'Preciona el botón para continuar!',
            'success')
        </script>"!!}
    @endif

<!-- ERROR INCOMPLETO -->
    @if($errors->any())

            @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                Checa tus Datos el Error es: {{$error}}
            </div>
            @endforeach

    @endif

    <div class="container">

<!-- FORMULARIO -->
    <form class="m-2" method="post" action="{{route('recuerdo.store')}}">

<!-- TOKEN -->
    @csrf
        <!-- NOMBRE -->        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="txtName" value="{{ old('txtName') }}">
            <label for="floatingInput">Nombre Completo</label>
                <p class="fst-italic text-danger">
                    {{ $errors->first('txtName') }}
                </p>
        </div>
        <!-- FECHA NACIMIENTO -->
        <div class="form-floating mb-3">
            <input type="date" class="form-control" name="date" value="{{ old('date') }}">
            <label for="floatingInput">Fecha de Nacimiento</label>
                <p class="fst-italic text-danger">
                    {{ $errors->first('date_add') }}
                </p>
        </div>
            
        <!-- LIBROS -->
        <div class="form-floating mb-3">
            <input type="number" class="form-control" name="number" value="{{ old('number') }}">
            <label for="floatingInput">No. Libros Publicados</label>
                <p class="fst-italic text-danger">
                    {{ $errors->first('number') }}
                </p>
        </div>
            

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success m-2">Ingresar Datos del Autor</button>
        </div>
            
    </form> 
   
    </div>    

@stop
