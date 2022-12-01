
@extends('plantilla')

@section('contenido')

    @if(session()->has('actualizo'))
        {!!"<script>
            Swal.fire(
            'Su Libro se Actualizó Correctamente',
            'Presiona el botón para continuar!',
            'success')
        </script>"!!}
    @endif

    @if(session()->has('eliminar'))
        {!!"<script>
            Swal.fire(
            'Su Libro se Elimino Correctamente',
            'Presiona el botón para continuar!',
            'warning')
        </script>"!!}
    @endif

    <p class="fs-1">Consulta Libros</p>
    <p class="fs-5">Muestra todos los libros que hay</p>

    <div class="container">

    @foreach($consultaLibro as $consulta)

    <div class="card mb-3">
        <div class="card-header">
            {{$consulta->titulo}}
        </div>

        <div class="card-body">
            <h5 class="card-title">Autor: {{$consulta->Nombre}}</h5>
            <h5 class="card-title">Páginas: {{$consulta->paginas}}</h5>
            <h5 class="card-title">Editorial: {{$consulta->editorial}}</h5>
        </div>
        
        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#ModalActualizarLibro{{$consulta->idLibro}}">
            Editar Autor
        </button>

        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminarLibro{{$consulta->idLibro}}">
            Eliminar Autor
        </button>

    @include('ModalActualizarLibro')   
    @include('ModalEliminarLibro')    

    </div>
    @endforeach
   
    </div>    

@stop
