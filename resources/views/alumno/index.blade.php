
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
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
          rel="stylesheet">
    <script>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Alumno') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('alumnos.create') }}" class="btn btn-primary btn-sm float-right"
                                   data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>

                            <a href="{{url('home')}}" class="btn btn-warning"> Regresar</a>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif


                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" >
                                <thead class="thead">
                                <tr>


                                    <th>Carnet</th>
                                    <th>Categoria</th>
                                    <th>Firstname</th>
                                    <th>Secondname</th>
                                    <th>Lastname</th>
                                    <th>Dateofbirth</th>
                                  <!--  <th>Address</th>-->
                                    <th>Email</th>
                                  <!--   <th>Dpi</th>-->
                                    <th>Cel</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>

                                @foreach ($alumnos as $alumno)
                                    <tr>


                                        <td>{{ $alumno->Carnet }}</td>
                                        <td>{{ $alumno->categoria->Description }}</td>
                                        <td>{{ $alumno->FirstName }}</td>
                                        <td>{{ $alumno->SecondName }}</td>
                                        <td>{{ $alumno->LastName }}</td>
                                        <td>{{ $alumno->DateOfBirth }}</td>
                                    <!-- <td>{{ $alumno->Address }}</td>-->
                                        <td>{{ $alumno->Email }}</td>
                                     <!--   <td>{{ $alumno->Dpi }}</td>-->
                                        <td>{{ $alumno->Cel }}</td>
                                        <td>
                                            <a class="btn material-icons" href="{{ route('alumnos.edit',$alumno->id) }}"><i class="fa fa-fw fa-edit"></i> edit</a>

                                        </td>
                                        <td>
                                            <form action="{{ route('alumnos.destroy',$alumno->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn material-icons" style="color: red">delete</button> </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
</body>
</html>


