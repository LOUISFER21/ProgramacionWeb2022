<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('pelicula_id') }}
            {{ Form::select('pelicula_id',$peliculas,$cinta->pelicula_id, ['class' => 'form-control' . ($errors->has('pelicula_id') ? ' is-invalid' : ''), 'placeholder' => 'Pelicula Id']) }}
            {!! $errors->first('pelicula_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $cinta->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>