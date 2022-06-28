<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('director_id') }}
            {{ Form::select('director_id',$directores, $directorfavorito->director_id, ['class' => 'form-control' . ($errors->has('director_id') ? ' is-invalid' : ''), 'placeholder' => 'Director Id']) }}
            {!! $errors->first('director_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('socio_id') }}
            {{ Form::select('socio_id',$socios, $directorfavorito->socio_id, ['class' => 'form-control' . ($errors->has('socio_id') ? ' is-invalid' : ''), 'placeholder' => 'Socio Id']) }}
            {!! $errors->first('socio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>