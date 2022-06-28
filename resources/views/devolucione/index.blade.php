@extends('layouts.app')

@section('template_title')
    Devolucione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Devolucione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('devoluciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Detalleprestamo Id</th>
										<th>Fechadevolucion</th>
										<th>Observaciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($devoluciones as $devolucione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>Socio: {{ $devolucione->detalleprestamo->socio->persona->nombre }}
                                                <br>Fecha: {{ $devolucione->detalleprestamo->prestamo->fechaprestamo }}</td>
											<td>{{ $devolucione->fechadevolucion }}</td>
											<td>{{ $devolucione->observaciones }}</td>

                                            <td>
                                                <form action="{{ route('devoluciones.destroy',$devolucione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('devoluciones.show',$devolucione->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('devoluciones.edit',$devolucione->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $devoluciones->links() !!}
            </div>
        </div>
    </div>
@endsection
