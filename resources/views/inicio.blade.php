
@extends('plantilla')

@section('contenido')

    <style>
        card{
            background: #FFEFBA;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #FFFFFF, #FFEFBA);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #FFFFFF, #FFEFBA); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
    </style>

<div class="container shadow-lg p-3 mt-5 mb-5 bg-body rounded">
    <div class="card">
        <div class="card-header fw-bold fs-3">
            BIBLIOTECA VIRTUAL
        </div>
    <div class="card-body">
        <h5 class="card-title">Accede a nuestra librería virtual</h5>
        <p class="card-text">Contamos con más de 5,000 libros disponibles</p>
        <a href="https://bibliotecavirtualdemexico.cultura.gob.mx/" class="btn btn-primary">Ir a...</a>
    </div>
</div>
<br>
<div class="card">
        <div class="card-header fw-bold fs-3">
            NOTICIA LITERARIA
        </div>
    <div class="card-body">
        <h5 class="card-title">Observa nuestras noticias literarias</h5>
        <p class="card-text">Las noticias más cool del momento</p>
       
        <div class="row">
        <div class="col-sm-4">
            <div class="card" style="width: 24rem;">
                <img src="http://c.files.bbci.co.uk/DDDA/production/_115149765_db4c2ec4-c6cf-418a-9a7f-1b43bb2ede25.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">El día de muertos en México, es una de las más grandes y representativas del país, ya que es parte de nuestra cultura el recordar a nuestros seres queridos que se encuentran descansando.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 20rem;">
                <img src="https://embamex.sre.gob.mx/alemania/images/IMG_0391.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">El altar es una manera de representar un portal entre la vida y la muerte, en él, se colocan cosas que nos recuerden a esos familiares que no estan entre nosotros físicamente.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 24rem;">
                <img src="https://www.gastrolabweb.com/u/fotografias/m/2021/10/13/f1280x720-20098_151773_5268.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">La comida es algo que abunda en estas fehcas, ya que a quien no le gusta comer un rico mole, tamales, etc.</p>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

</div>
</div>

@stop
