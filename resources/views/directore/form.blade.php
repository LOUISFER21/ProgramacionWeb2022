<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('persona_id') }}
            {{ Form::select('persona_id',$personas ,$directore->persona_id, ['class' => 'form-control' . ($errors->has('persona_id') ? ' is-invalid' : ''), 'placeholder' => 'Persona Id']) }}
            {!! $errors->first('persona_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombreartistico') }}
            {{ Form::text('nombreartistico', $directore->nombreartistico, ['class' => 'form-control' . ($errors->has('nombreartistico') ? ' is-invalid' : ''), 'placeholder' => 'Nombreartistico']) }}
            {!! $errors->first('nombreartistico', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>