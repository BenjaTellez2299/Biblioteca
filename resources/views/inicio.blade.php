
@extends('plantilla')

@section('contenido')

<div class="container mt-4 mb-4">
    <div class="card">
        <div class="card-header">
            Biblioteca Virtual
        </div>
    <div class="card-body">
        <h5 class="card-title">Accede a nuestra librería virtual</h5>
        <p class="card-text">Contamos con más de 5,000 libros disponibles</p>
        <a href="https://bibliotecavirtualdemexico.cultura.gob.mx/" class="btn btn-primary">Ir a...</a>
    </div>

    <div class="card">
        <div class="card-header">
            Noticia Literaria
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

@stop
