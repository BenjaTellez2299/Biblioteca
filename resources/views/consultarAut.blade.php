
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
    </div>
    @endforeach
   
    </div>    

@stop
