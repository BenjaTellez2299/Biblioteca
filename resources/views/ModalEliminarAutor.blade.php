
<!-- Modal -->
<div class="modal fade" id="ModalEliminarAutor{{$consulta->idAutor}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEliminarAutor{{$consulta->idAutor}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Información del Autor</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

            <form class="m-2" method="post" action="{{ route('recuerdo.destroy', $consulta->idAutor) }}">
                @csrf

                @method('delete')

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txtName" value="{{ $consulta->Nombre }}">
                                <p class="fst-italic text-danger">
                                    {{ $errors->first('txtName') }}
                                </p>
                        </div>
                </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Regresar</button>
                <button type="submit" class="btn btn-outline-warning">Eliminar</button>
            </div>

            </form> 
        </div>

        </div>
    </div>
</div>