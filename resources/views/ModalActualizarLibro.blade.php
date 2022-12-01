
<!-- Modal -->
<div class="modal fade" id="ModalActualizarLibro{{$consulta->idLibro}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalActualizarLibro{{$consulta->idLibro}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Información del Libro</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

            <form class="m-2" method="post" action="{{ route('libro.update', $consulta->idLibro) }}">
                @csrf

                {!!method_field('PUT')!!}

                <!-- ISBN -->        
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="txtISBN" value="{{ $consulta->isbn }}">
                    <label for="floatingInput">ISBN</label>
                        <p class="fst-italic text-danger">
                            {{ $errors->first('txtISBN') }}
                        </p>
                </div>
                <!-- TITULO -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="txtTitu" value="{{ $consulta->titulo }}">
                    <label for="floatingInput">Título del Libro</label>
                        <p class="fst-italic text-danger">
                            {{ $errors->first('txtTitu') }}
                        </p>
                </div>
                <!-- AUTOR -->
                <label for="floatingInput">Autor del Libro</label>
                <div class="form-floating mb-3">
                    <select class="form-select" aria-label="Default select example" name="txtAutor">
                        <option selected disabled="disabled">Seleccione un autor...</option>
                        
                    </select>
                </div>
                <!-- PÁGINAS -->
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="txtPag" value="{{ $consulta->paginas }}">
                    <label for="floatingInput">Número de Páginas</label>
                        <p class="fst-italic text-danger">
                            {{ $errors->first('txtPag') }}
                        </p>
                </div>
                <!-- EDITORIAL -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="txtEdit" value="{{ $consulta->editorial }}">
                    <label for="floatingInput">Editorial del Libro</label>
                        <p class="fst-italic text-danger">
                            {{ $errors->first('txtEdit') }}
                        </p>
                </div>
                <!-- EMAIL -->
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="txtEmail" value="{{ $consulta->correo }}">
                    <label for="floatingInput">Email Editorial</label>
                        <p class="fst-italic text-danger">
                            {{ $errors->first('txtEmail') }}
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