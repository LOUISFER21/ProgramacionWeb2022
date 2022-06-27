<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('actor_id') }}
            {{ Form::select('actor_id',$actores, $detalleactore->actor_id, ['class' => 'form-control' . ($errors->has('actor_id') ? ' is-invalid' : ''), 'placeholder' => 'Actor Id']) }}
            {!! $errors->first('actor_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pelicula_id') }}
            {{ Form::select('pelicula_id',$peliculas ,$detalleactore->pelicula_id, ['class' => 'form-control' . ($errors->has('pelicula_id') ? ' is-invalid' : ''), 'placeholder' => 'Pelicula Id']) }}
            {!! $errors->first('pelicula_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>