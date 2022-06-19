@extends('layouts.app')

@section("empleados")
    active
@endsection

@section('content')
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card shadow-sm al a">
                <div class="card-body">
                    <div class="row mt-0">
                        <h5 class="card-title alert alert-success text-center">Registrar nuevo empleado</h5>
                        <form method="POST" action="{{route("empleados.store")}}">
                            <h4 class="text-center">Datos del empleado</h4>
                            @csrf
                            <div class="row mt-0">
                                <div class="col-sm-3">
                                    <label for="codigo_empleado" class="form-label">Codigo empleado</label>
                                    <input type="text" class="form-control @error('codigo_empleado') is-invalid @enderror"
                                           id="codigo_empleado" name="codigo_empleado"  value="{{ old('codigo_empleado') }}">
                                    @error('codigo_empleado')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <label for="nombre" class="form-label">Nombre del empleado</label>
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                                           id="nombre" name="nombre"  value="{{ old('nombre') }}">
                                    @error('nombre')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="col-sm-3">
                                    <label for="apellido_paterno" class="form-label">Apellido paterno</label>
                                    <input type="text" class="form-control @error('apellido_paterno') is-invalid @enderror"
                                           id="apellido_paterno" name="apellido_paterno"  value="{{ old('apellido_paterno') }}">
                                    @error('apellido_paterno')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="col-sm-3">
                                    <label for="apellido_materno" class="form-label">Apellido materno</label>
                                    <input type="text" class="form-control @error('apellido_materno') is-invalid @enderror"
                                           id="apellido_materno" name="apellido_materno"  value="{{ old('apellido_materno') }}">
                                    @error('apellido_materno')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                

                                <div class="col-sm-3">
                                    <label for="area_trabajo" class="form-label">Area de trabajo</label>
                                    <input type="text" class="form-control @error('area_trabajo') is-invalid @enderror"
                                           id="area_trabajo" name="area_trabajo"  value="{{ old('area_trabajo') }}">
                                    @error('area_trabajo')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="col-sm-3">
                                    <label for="sueldo_dia" class="form-label">Sueldo por Dia</label>
                                    <input type="number" class="form-control @error('sueldo_dia') is-invalid @enderror"
                                           id="sueldo_dia" name="sueldo_dia"  value="{{ old('sueldo_dia') }}">
                                    @error('sueldo_dia')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="col-sm-3">
                                    <label for="dias_trabajados" class="form-label">Dias trabajados</label>
                                    <input type="number" class="form-control @error('dias_trabajados') is-invalid @enderror"
                                           id="dias_trabajados" name="dias_trabajados"  value="{{ old('dias_trabajados') }}">
                                    @error('dias_trabajados')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-3">
                                    
                                    <label>El total neto es:  </label><input type="text" onmousedown="return false;" class="form-control @error('total_neto') is-invalid @enderror"
                                           id="total_neto" name="total_neto" value="{{ old('total_neto') }}">
                                    @error('total_neto')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                    <input type="button" name="total_neto" value="calcular" onclick="totales_neto()" >
                                </div>
                                <div class="col-sm-3">
                                    
                                    <label>El total bruto es:  </label><input type="text" onmousedown="return false;"  class="form-control @error('total_bruto') is-invalid @enderror"
                                           id="total_bruto" name="total_bruto" value="{{ old('total_bruto') }}">
                                    @error('total_bruto')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                    <input type="button" name="total_bruto" value="calcular" onclick="totales_bruto()" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 offset-5">
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
    </div>
@endsection()
