<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- SWEETALERT -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- PESTAÑA -->
    <title>Cardelucky</title>

    <style>
        nav{
            background: #ADA996;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        body{
            background: #FFEFBA;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #FFFFFF, #FFEFBA);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #FFFFFF, #FFEFBA); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

    </style>

</head>

<body>

<!-- BARRA DE NAVEGACIÓN -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="inicio">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="registrarLib">Registrar Libro</a>
            </li>

            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('libro.index')}}">Consultar Libro</a>
            </li>

            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="registrarAut">Registrar Autores</a>
            </li>
        
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('autor.index')}}">Consultar Autores</a>
            </li>

        </ul>       
        </div>

    </div>
</nav>

<!-- CONTENIDO -->

    <div class="text-center">

    @yield('contenido')

    </div>

<!-- PIE DE PÁGINA -->
    <div class="p-3 bg-dark bg-opacity-10 border border-warning border-start-0 rounded-end text-center text-light">
        Biblioteca "Cardelucky" CopyRight©     Hoy es

        <?php
        date_default_timezone_set('America/Mexico_City');
        $fecha = date('d/F/o');
        echo "$fecha";
        ?>
    </div>

    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>