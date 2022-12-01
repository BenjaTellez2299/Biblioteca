
@extends('plantilla')

@section('contenido')

    @if(session()->has('actualizo'))
        {!!"<script>
            Swal.fire(
            'Su Autor se Actualizó Correctamente',
            'Presiona el botón para continuar!',
            'success')
        </script>"!!}
    @endif

    @if(session()->has('eliminar'))
        {!!"<script>
            Swal.fire(
            'Su Autor se Elimino Correctamente',
            'Presiona el botón para continuar!',
            'warning')
        </script>"!!}
    @endif

    <p class="fs-1">Consulta Autores</p>
    <p class="fs-5">Muestra todos los autores que hay</p>

    <div class="container">

    @foreach($consultaAutor as $consulta)

    <div class="card mb-3">
        <div class="card-header">
            {{$consulta->Nombre}}
        </div>

        <div class="card-body">
            <h5 class="card-title">Fecha de Nacimiento: {{$consulta->fecha}}</h5>
            <h5 class="card-title">Libros Publicados: {{$consulta->libros}}</h5>
        </div>
        
        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#ModalActualizarAutor{{$consulta->idAutor}}">
            Editar Autor
        </button>

        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminarAutor{{$consulta->idAutor}}">
            Eliminar Autor
        </button>

    @include('ModalActualizarAutor')   
    @include('ModalEliminarAutor')    

    </div>
    @endforeach
   
    </div>    

@stop
