<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fechaprestamo') }}
            {{ Form::text('fechaprestamo', $prestamo->fechaprestamo, ['class' => 'form-control' . ($errors->has('fechaprestamo') ? ' is-invalid' : ''), 'placeholder' => 'Fechaprestamo']) }}
            {!! $errors->first('fechaprestamo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><i class="bi bi-bookmark-check"> Guardar</i></button>
    </div>
</div>