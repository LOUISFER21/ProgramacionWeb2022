<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('socio_id') }}
            {{ Form::select('socio_id',$personas, $detalleprestamo->socio_id, ['class' => 'form-control' . ($errors->has('socio_id') ? ' is-invalid' : ''), 'placeholder' => ' Seleciona Socio']) }}
            {!! $errors->first('socio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prestamo_id') }}
            {{ Form::select('prestamo_id', $prestamos,$detalleprestamo->prestamo_id, ['class' => 'form-control' . ($errors->has('prestamo_id') ? ' is-invalid' : ''), 'placeholder' => 'Ingresa Fecha']) }}
            {!! $errors->first('prestamo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cinta_id') }}
            {{ Form::select('cinta_id',$cintas ,$detalleprestamo->cinta_id, ['class' => 'form-control' . ($errors->has('cinta_id') ? ' is-invalid' : ''), 'placeholder' => ' Ingresa Cinta']) }}
            {!! $errors->first('cinta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
<<<<<<< HEAD
        <button type="submit" class="btn btn-primary">Guardar</button>
=======
        <button type="submit" class="btn btn-primary"><i class="bi bi-bookmark-check"></i> Guardar</button>
>>>>>>> 52ab42e3b4ee24ffa4220fda02c50ce2909b064c
    </div>
</div>