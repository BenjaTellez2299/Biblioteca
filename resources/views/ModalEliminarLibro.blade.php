
<!-- Modal -->
<div class="modal fade" id="ModalEliminarLibro{{$consulta->idLibro}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEliminarLibro{{$consulta->idLibro}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Desea Eliminar este Libro?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

            <form class="m-2" method="post" action="{{ route('libro.destroy', $consulta->idLibro) }}">
                @csrf

                @method('delete')

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="txtName" value="{{ $consulta->titulo }}" disabled>
                    <label for="floatingInput">Libro:</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="txtName" value="{{ $consulta->Nombre }}" disabled>
                    <label for="floatingInput">Autor:</label>
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