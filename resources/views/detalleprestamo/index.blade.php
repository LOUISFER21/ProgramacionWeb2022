<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

@extends('layouts.app')

@section('template_title')
    Detalleprestamo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalle Prestamo') }}
                            </span>

                             <div class="float-right">
<<<<<<< HEAD
                                <a href="{{ route('detalleprestamos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo') }}
=======
                                <a href="{{ route('detalleprestamos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left"><i class="bi bi-plus-circle"></i>
                                  {{ __('Create New') }}
>>>>>>> bcb111ab3cf52bf5a06fd36ef21cdea0e476e086
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
<<<<<<< HEAD
										<th>Socio </th>
										<th>Prestamo </th>
										<th>Cinta </th>
=======
                                        <th>Socio Id</th>
                                        <th>Prestamo Id</th>
                                        <th>Cinta Id</th>
>>>>>>> bcb111ab3cf52bf5a06fd36ef21cdea0e476e086

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalleprestamos as $detalleprestamo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $detalleprestamo->socio->persona->nombre }}</td>
                                            <td>{{ $detalleprestamo->prestamo->fechaprestamo}}</td>
                                            <td>{{ $detalleprestamo->cinta->codigo }}</td>

                                            <td>
                                                <form action="{{ route('detalleprestamos.destroy',$detalleprestamo->id) }}" method="POST">
<<<<<<< HEAD
                                                    
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalleprestamos.edit',$detalleprestamo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> eliminar</button>
=======
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalleprestamos.show',$detalleprestamo->id) }}"><i class="fa fa-fw fa-eye bi-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalleprestamos.edit',$detalleprestamo->id) }}"><i class="fa fa-fw fa-edit bi bi-pencil"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash bi bi-trash"></i> Delete</button>
>>>>>>> bcb111ab3cf52bf5a06fd36ef21cdea0e476e086
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $detalleprestamos->links() !!}
            </div>
        </div>
    </div>
@endsection
