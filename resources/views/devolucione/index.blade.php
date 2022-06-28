@extends('layouts.app')

@section('template_title')
    Devolucion
@endsection

@section('content')


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2"> </div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h1 class="text-center mb-5">{{ __('Devoluciones') }}</h1> 
                            </span>

                             <div class="float-right">
                                <a href="{{ route('devoluciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left"><i class="bi bi-plus-circle"></i>
                                  {{ __(' Nuevo') }}
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
                                        <th>No.</th>
                                        
										<th>Detalles de Prestamo</th>
										<th>Fecha de Devolucion</th>
										<th>Observaciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($devoluciones as $devolucione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>Cinta: {{ $devolucione->detalleprestamo->cinta->codigo }}

                                                <br>Fecha prestamo: {{ $devolucione->detalleprestamo->prestamo->fechaprestamo }}
                                                <br>Socio: {{ $devolucione->detalleprestamo->socio->persona->nombre }}  {{ $devolucione->detalleprestamo->socio->persona->apellidopaterno }} {{ $devolucione->detalleprestamo->socio->persona->apellidomaterno }}



                                            </td>
											<td>{{ $devolucione->fechadevolucion }}</td>
											<td>{{ $devolucione->observaciones }}</td>

                                            <td>
                                                <form action="{{ route('devoluciones.destroy',$devolucione->id) }}" method="POST">

                                                    
                                                    <a class="btn btn-sm btn-success" href="{{ route('devoluciones.edit',$devolucione->id) }}"><i class="fa fa-fw fa-edit bi bi-pencil"></i><span class="icon-pencil"></span></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash bi bi-trash"></i></button>
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
