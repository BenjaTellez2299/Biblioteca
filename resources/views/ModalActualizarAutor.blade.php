
<!-- Modal -->
<div class="modal fade" id="ModalActualizarAutor{{$consulta->idAutor}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalActualizarAutor{{$consulta->idAutor}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Información del Autor</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

            <form class="m-2" method="post" action="{{ route('recuerdo.update', $consulta->idAutor) }}">
                @csrf

                {!!method_field('PUT')!!}

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txtName" value="{{ $consulta->Nombre }}">
                                <p class="fst-italic text-danger">
                                    {{ $errors->first('txtName') }}
                                </p>
                        </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Fecha Nacimiento:</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="date" value="{{ $consulta->fecha }}">
                                <p class="fst-italic text-danger">
                                    {{ $errors->first('date') }}
                                </p>
                        </div>
                </div> 

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="number" value="{{ $consulta->libros }}">
                    <label for="floatingInput">No. Libros Publicados</label>
                        <p class="fst-italic text-danger">
                            {{ $errors->first('number') }}
                        </p>
                </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Regresar</button>
                <button type="submit" class="btn btn-outline-success">Actualizar</button>
            </div>

            </form> 
        </div>

        </div>
    </div>
</div>