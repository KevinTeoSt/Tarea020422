
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

</head>
<body>

<header class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">Laravel Practice No.1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarScroll">
                <ul class="navbar-nav justify-content-end collapse navbar-collapse me-auto my-2 my-lg-0 navbar-nav-scroll"
                    id="navbarScroll">
                    <li class="nav-item">

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="nav-link active" :href="route('logout')"
                               onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</a>

                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@extends('layouts.app')

@section('template_title')
@section('template_title')
    Alumno
@endsection

@section('content')
    <a class="btn btn-outline-secondary" href="{{ url('/home') }}">Regresar</a>
    <h3>Error 404: pagina no encontrada</h3>
    <img style="float: left;
    margin: 0 auto;
    max-width: 60%;
    width: 40%;"
         src="https://static.vecteezy.com/system/resources/previews/004/449/855/large_2x/lost-in-forest-flat-color-illustration-survivor-with-backpack-panic-and-thinking-of-map-camper-question-location-confused-man-2d-cartoon-character-with-winter-hills-with-trees-on-background-vector.jpg"><br>


@endsection
</body>
</html>




