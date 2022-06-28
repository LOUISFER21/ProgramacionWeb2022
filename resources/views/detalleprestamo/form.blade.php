<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('socio_id') }}
            {{ Form::select('socio_id',$socios, $detalleprestamo->socio_id, ['class' => 'form-control' . ($errors->has('socio_id') ? ' is-invalid' : ''), 'placeholder' => 'Socio Id']) }}
            {!! $errors->first('socio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prestamo_id') }}
            {{ Form::select('prestamo_id', $prestamos,$detalleprestamo->prestamo_id, ['class' => 'form-control' . ($errors->has('prestamo_id') ? ' is-invalid' : ''), 'placeholder' => 'Prestamo Id']) }}
            {!! $errors->first('prestamo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cinta_id') }}
            {{ Form::select('cinta_id',$cintas ,$detalleprestamo->cinta_id, ['class' => 'form-control' . ($errors->has('cinta_id') ? ' is-invalid' : ''), 'placeholder' => 'Cinta Id']) }}
            {!! $errors->first('cinta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>