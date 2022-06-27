@extends('layouts.app')

@section('template_title')
    Detalleactore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalleactore') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalleactores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Actor Id</th>
										<th>Pelicula Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalleactores as $detalleactore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detalleactore->actore->nombreartistico }}</td>
											<td>{{ $detalleactore->pelicula->titulo}}</td>

                                            <td>
                                                <form action="{{ route('detalleactores.destroy',$detalleactore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalleactores.show',$detalleactore->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalleactores.edit',$detalleactore->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $detalleactores->links() !!}
            </div>
        </div>
    </div>
@endsection
