<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Carnet') }}
            {{ Form::text('Carnet', $alumno->Carnet, ['class' => 'form-control' . ($errors->has('Carnet') ? ' is-invalid' : ''), 'placeholder' => 'Carnet']) }}
            {!! $errors->first('Carnet', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoria_id') }}
            {{ Form::select('categoria_id',$categoria ,$alumno->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FirstName') }}
            {{ Form::text('FirstName',$alumno->FirstName, ['class' => 'form-control' . ($errors->has('FirstName') ? ' is-invalid' : ''), 'placeholder' => 'Firstname']) }}
            {!! $errors->first('FirstName', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SecondName') }}
            {{ Form::text('SecondName', $alumno->SecondName, ['class' => 'form-control' . ($errors->has('SecondName') ? ' is-invalid' : ''), 'placeholder' => 'Secondname']) }}
            {!! $errors->first('SecondName', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LastName') }}
            {{ Form::text('LastName', $alumno->LastName, ['class' => 'form-control' . ($errors->has('LastName') ? ' is-invalid' : ''), 'placeholder' => 'Lastname']) }}
            {!! $errors->first('LastName', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DateOfBirth') }}
            {{ Form::text('DateOfBirth', $alumno->DateOfBirth, ['class' => 'form-control' . ($errors->has('DateOfBirth') ? ' is-invalid' : ''), 'placeholder' => 'Dateofbirth']) }}
            {!! $errors->first('DateOfBirth', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Address') }}
            {{ Form::text('Address', $alumno->Address, ['class' => 'form-control' . ($errors->has('Address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('Address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('Email', $alumno->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dpi') }}
            {{ Form::text('Dpi', $alumno->Dpi, ['class' => 'form-control' . ($errors->has('Dpi') ? ' is-invalid' : ''), 'placeholder' => 'Dpi']) }}
            {!! $errors->first('Dpi', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cel') }}
            {{ Form::text('Cel', $alumno->Cel, ['class' => 'form-control' . ($errors->has('Cel') ? ' is-invalid' : ''), 'placeholder' => 'Cel']) }}
            {!! $errors->first('Cel', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
