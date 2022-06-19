@extends('layouts.app')

@section("empleados")
    active
@endsection

@section('content')
<div class="row">
        <div class="col-4 offset-2">
            <div class="card">
                <div class="card-body ">
                    <h5 class="card-title alert alert-success">Modificar Empleados</h5>
                    <form method="POST" action="{{route("empleados.update",$empleado->id)}}">
                        @csrf
                        @method("PUT")
                        <div class="row mt-0">
                            <div class="mb-sm-3">
                                <label for="codigo_empleado" class="form-label">Codigo</label>
                                <input type="text" class="form-control" id="codigo_empleado" name="codigo_empleado" value="{{$empleado->codigo_empleado}}">
                            </div>
                            <div class="mb-sm-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$empleado->nombre}}">
                            </div>
                            <div class="mb-sm-3">
                                <label for="apellido_paterno" class="form-label">apellido_paterno</label>
                                <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" value="{{$empleado->apellido_paterno}}">
                            </div>
                            <div class="mb-sm-3">
                                <label for="apellido_materno" class="form-label">apellido_materno</label>
                                <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" value="{{$empleado->apellido_materno}}">
                            </div>
                            <div class="mb-sm-3">
                                <label for="area_trabajo" class="form-label">area_trabajo</label>
                                <input type="text" class="form-control" id="area_trabajo" name="area_trabajo" value="{{$empleado->area_trabajo}}">
                            </div>
                            <div class="mb-sm-3">
                                <label for="sueldo_dia" class="form-label">sueldo_dia</label>
                                <input type="text" class="form-control" id="sueldo_dia" name="sueldo_dia" value="{{$empleado->sueldo_dia}}">
                            </div>
                            <div class="mb-sm-3">
                                <label for="dias_trabajados" class="form-label">dias_trabajados</label>
                                <input type="text" class="form-control" id="dias_trabajados" name="dias_trabajados" value="{{$empleado->dias_trabajados}}">
                            </div>
                            <div class="col-sm-3">
                                    
                                    <label for="total_neto" class="form-label">Total neto  </label>
                                    <input type="text" onmousedown="return false;" class="form-control"
                                           id="total_neto" name="total_neto" value="{{ old('total_neto') }}">
                                    
                                    <input type="button" name="total_neto" value="calcular" onclick="totales_neto()" >
                                </div>
                            <div class="col-sm-3">
                                    
                                    <label for="total_bruto" class="form-label">Total bruto  </label>
                                    <input type="text" onmousedown="return false;" class="form-control"
                                           id="total_bruto" name="total_bruto" value="{{ old('total_bruto') }}">
                                    
                                    <input type="button" name="total_bruto" value="calcular" onclick="totales_bruto()" >
                                </div>
                                
                        </div>
                        <div class="row ">
                            <div class="col mt-3">
                                <a href="{{url("empleados")}}" class="btn btn-danger card-link">Cancelar</a>
                                <button type="submit" class="btn btn-primary card-link">Guardar</button>
                            </div>
                        </div>
                    </form>
                    <script type="text/javascript">
                            function totales_neto()
                            {
                                var valor1 = parseInt(document.getElementById('sueldo_dia').value);
                                var valor2 = parseInt(document.getElementById('dias_trabajados').value);
                                var total_neto= valor1 * valor2;
                                document.getElementById('total_neto').value=total_neto;
                            }
                            function totales_bruto()
                            {
                                var valor1 = parseInt(document.getElementById('total_neto').value);
                                var total_bruto= valor1-(valor1 * .16);
                                document.getElementById('total_bruto').value=total_bruto;
                            }
                            
                        </script>
                </div>
            </div>
        </div>
    </div>

@endsection()