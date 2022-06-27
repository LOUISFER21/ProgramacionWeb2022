@extends('layouts.app')

@section('template_title')
    Detalledirectore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalledirectore') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalledirectores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Director Id</th>
										<th>Pelicula Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalledirectores as $detalledirectore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detalledirectore->directore->nombreartistico }}</td>
											<td>{{ $detalledirectore->pelicula->titulo }}</td>

                                            <td>
                                                <form action="{{ route('detalledirectores.destroy',$detalledirectore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalledirectores.show',$detalledirectore->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalledirectores.edit',$detalledirectore->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $detalledirectores->links() !!}
            </div>
        </div>
    </div>
@endsection
