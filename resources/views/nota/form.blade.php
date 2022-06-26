<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('estudinte_id') }}
            {{ Form::select('estudinte_id',$estudiantes, $nota->estudinte_id, ['class' => 'form-control' . ($errors->has('estudinte_id') ? ' is-invalid' : ''), 'placeholder' => 'Estudinte Id']) }}
            {!! $errors->first('estudinte_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('materia_id') }}
            {{ Form::select('materia_id',$materias, $nota->materia_id, ['class' => 'form-control' . ($errors->has('materia_id') ? ' is-invalid' : ''), 'placeholder' => 'Materia Id']) }}
            {!! $errors->first('materia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('puntaje') }}
            {{ Form::text('puntaje', $nota->puntaje, ['class' => 'form-control' . ($errors->has('puntaje') ? ' is-invalid' : ''), 'placeholder' => 'Puntaje']) }}
            {!! $errors->first('puntaje', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Agregar</button>
    </div>
</div>