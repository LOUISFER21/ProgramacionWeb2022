<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('detalleprestamo_id') }}
            {{ Form::select('detalleprestamo_id',$detalleprestamos ,$devolucione->detalleprestamo_id, ['class' => 'form-control' . ($errors->has('detalleprestamo_id') ? ' is-invalid' : ''), 'placeholder' => 'Detalleprestamo Id']) }}
            {!! $errors->first('detalleprestamo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechadevolucion') }}
            {{ Form::text('fechadevolucion', $devolucione->fechadevolucion, ['class' => 'form-control' . ($errors->has('fechadevolucion') ? ' is-invalid' : ''), 'placeholder' => 'Fechadevolucion']) }}
            {!! $errors->first('fechadevolucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $devolucione->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>