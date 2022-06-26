@extends('layouts.app')

@section("empleados")
    active
@endsection
@section('content')
<div class="row">
     <div class="col">
        <div class="row">
                <div class="col">
                     <h1 class="h1 alert alert-primary">Empleados</h1>
                </div>
        </div>
       
        <div class="row">
            <div class="col-10 offset-1">
                <a href="{{url("empleados/create")}}" class="btn btn-success" data-toggle="tooltip" title="Nuevo empleado">Nuevo</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                             <th scope="col">Codigo</th>
                             <th scope="col">Nombre</th>
                             <th scope="col">Apellido Paterno</th>
                             <th scope="col">Apellido Materno</th>
                             <th scope="col">Area de Trabajo</th>
                             <th scope="col">Sueldo al Dia</th>
                             <th scope="col">Dias Trabajados</th>
                             <th scope="col">Total Neto</th>
                             <th scope="col">Total Bruto</th>
                             <th scope="col">Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tbody> @foreach($datos as $empleados)
                        <tr>
                            <th scope="row">{{$loop->index+1}} </th>
                            <td>{{$empleados->codigo_empleado}}</td>
                            <td>{{$empleados->nombre}}</td>
                            <td>{{$empleados->apellido_paterno}}</td>
                            <td>{{$empleados->apellido_materno}}</td>
                            <td>{{$empleados->area_trabajo}}</td>
                            <td>{{$empleados->sueldo_dia}}</td>
                            <td>{{$empleados->dias_trabajados}}</td>
                            <td>{{$empleados->total_neto}}</td>
                            <td>{{$empleados->total_bruto}}</td>
                            <td>
                                <a href="{{route("empleados.edit",$empleados->id)}}" class="btn btn-primary">
                                       <span  title="Editar reaccion">Editar</span>
                                </a>                            
                                <form method="POST" action="{{route("empleados.destroy",$empleados->id)}}">
                                    @csrf
                                    @method("DELETE")
                                        <button type="submit" class="btn btn-danger">
                                            Eliminar 
                                        </button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
</d>
@endsection