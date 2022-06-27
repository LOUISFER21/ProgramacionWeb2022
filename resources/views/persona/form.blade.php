<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $persona->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidopaterno') }}
            {{ Form::text('apellidopaterno', $persona->apellidopaterno, ['class' => 'form-control' . ($errors->has('apellidopaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidopaterno']) }}
            {!! $errors->first('apellidopaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidomaterno') }}
            {{ Form::text('apellidomaterno', $persona->apellidomaterno, ['class' => 'form-control' . ($errors->has('apellidomaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidomaterno']) }}
            {!! $errors->first('apellidomaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>