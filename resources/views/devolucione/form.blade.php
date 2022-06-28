<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">


<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Detalleprestamo') }}
            {{ Form::select('detalleprestamo_id',$detalleprestamos,$devolucione->detalleprestamo_id, ['class' => 'form-control' . ($errors->has('detalleprestamo_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona']) }}
            {!! $errors->first('detalleprestamo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <label for="fechadevolucion">Fecha de Devolucion</label>
                <div class="form-floating mb-3">
                    <div class='input-group date' id='datetimepicker'>
                        <input type="text" class="form-control @error('fechadevolucion') is-invalid @enderror"id="fechadevolucion" placeholder="Fecha devolucion" name="fechadevolucion">
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                        @error('fecha_devolucion')
                        <div class="invalid-feedback">{{$message}}</div>@enderror
                        </div>
                        <script type="text/javascript">
                        $(function () {$('#datetimepicker').datetimepicker
                        ({format: "YYYY-MM-DD",});});
                    </script>
                </div>


        <div class="form-group">
            {{ Form::label('Observaciones') }}
            {{ Form::text('observaciones', $devolucione->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Ingresa Obserbacion']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
    </div>
    <div class="box-footer mt20">

        <button type="submit" class="btn btn-primary"><i class="bi bi-bookmark-check"></i> Guardar</button>

    </div>
</div>