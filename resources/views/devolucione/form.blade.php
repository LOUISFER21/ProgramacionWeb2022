<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Detalleprestamo') }}
            {{ Form::select('detalleprestamo_id',$detalleprestamos,$devolucione->detalleprestamo_id, ['class' => 'form-control' . ($errors->has('detalleprestamo_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona']) }}
            {!! $errors->first('detalleprestamo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha Devolucion') }}
            {{ Form::text ('fechadevolucion', $devolucione->fechadevolucion, ['class' => 'form-control' . ($errors->has('fechadevolucion') ? ' is-invalid' : ''), 'placeholder' => 'Ingresa Fecha']) }}
            {!! $errors->first('fechadevolucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observaciones') }}
            {{ Form::text('observaciones', $devolucione->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Ingresa Obserbacion']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>