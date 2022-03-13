<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Additional CSS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
            crossorigin="anonymous"></script>
</head>

<body class="bg-light">
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
                        <a class="btn btn-outline-secondary" href="{{ url('/alumnos') }}">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container">
    <main>

        <div class="text-center">
            <img src="https://cdn.pixabay.com/photo/2012/05/07/01/54/owl-47526__480.png"
                 alt="Más de 100 vectores de Alumno y Ojo gratis" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb"
                 data-noaft="1" style="width: 183px; height: 161.179px; margin: 0px;">
            <h2>Student Registration</h2>
            <p class="lead">All fields are required.</p>
        </div>

        <div class="row g-2">
            <div class="col-md-5 col-lg-8">
                <h4 class="mb-1">Student Information</h4>

                <form method="POST" action="{{ route('alumnos.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf

                    <div class="row g-3">


                        <div class="col-sm-6">
                            <div class="form-group">
                                {{ Form::label('Carnet') }}
                                {{ Form::text('Carnet', $alumno->Carnet, ['class' => 'form-control' . ($errors->has('Carnet') ? ' is-invalid' : ''), 'placeholder' => 'Carnet']) }}
                                {!! $errors->first('Carnet', '<div class="invalid-feedback">:message</div>') !!}
                            </div>

                        </div>


                        <div class="col-6">
                            <div class="form-group">
                                {{ Form::label('Select category') }}
                                {{ Form::select('categoria_id',$categoria ,$alumno->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : '')]) }}
                                {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                {{ Form::label('FirstName') }}
                                {{ Form::text('FirstName',$alumno->FirstName, ['class' => 'form-control' . ($errors->has('FirstName') ? ' is-invalid' : ''), 'placeholder' => 'Firstname']) }}
                                {!! $errors->first('FirstName', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>


                        <div class="col-6">
                            <div class="form-group">
                                {{ Form::label('SecondName') }}
                                {{ Form::text('SecondName', $alumno->SecondName, ['class' => 'form-control' . ($errors->has('SecondName') ? ' is-invalid' : ''), 'placeholder' => 'Secondname']) }}
                                {!! $errors->first('SecondName', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>


                        <div class="col-6">
                            <div class="form-group">
                                {{ Form::label('LastName') }}
                                {{ Form::text('LastName', $alumno->LastName, ['class' => 'form-control' . ($errors->has('LastName') ? ' is-invalid' : ''), 'placeholder' => 'Lastname']) }}
                                {!! $errors->first('LastName', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                {{ Form::label('DateOfBirth') }}
                                {{ Form::text('DateOfBirth', $alumno->DateOfBirth, ['class' => 'form-control' . ($errors->has('DateOfBirth') ? ' is-invalid' : ''), 'placeholder' => 'Dateofbirth']) }}
                                {!! $errors->first('DateOfBirth', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>



                        <div class="col-12">

                            <div class="form-group">
                                {{ Form::label('Address') }}
                                {{ Form::text('Address', $alumno->Address, ['class' => 'form-control' . ($errors->has('Address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
                                {!! $errors->first('Address', '<div class="invalid-feedback">:message</div>') !!}
                            </div>

                        </div>


                        <div class="col-4">
                            <div class="form-group">
                                {{ Form::label('Email') }}
                                {{ Form::text('Email', $alumno->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
                                {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                {{ Form::label('Dpi') }}
                                {{ Form::text('Dpi', $alumno->Dpi, ['class' => 'form-control' . ($errors->has('Dpi') ? ' is-invalid' : ''), 'placeholder' => 'Dpi']) }}
                                {!! $errors->first('Dpi', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                {{ Form::label('Cel') }}
                                {{ Form::text('Cel', $alumno->Cel, ['class' => 'form-control' . ($errors->has('Cel') ? ' is-invalid' : ''), 'placeholder' => 'Cel']) }}
                                {!! $errors->first('Cel', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                {{ Form::label('Foto') }}
                                {{ Form::file('Foto', $alumno->Foto, ['class' => 'form-control' . ($errors->has('Foto') ? ' is-invalid' : ''), 'placeholder' => 'Foto']) }}
                                {!! $errors->first('Foto', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>

                        <div class="box box-info padding-1">
                            <div class="box-body">

                            </div>

                        </div>


                        <input href="{{url('/alumnos')}}" class="btn btn-primary mb-5" type="submit" value="Save">

                    </div>
                </form>

            </div>
        </div>
    </main>

</div>

</body>
<div class="card text-center">

    <div class="card-footer text-muted">
        Kevin Emanuel Esquivel Teo; 0909-18-4551
    </div>
</div>
</html>

