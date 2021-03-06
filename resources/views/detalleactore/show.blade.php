@extends('layouts.app')

@section('template_title')
    {{ $detalleactore->name ?? 'Show Detalleactore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Detalleactore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalleactores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Actor Id:</strong>
                            {{ $detalleactore->actor_id }}
                        </div>
                        <div class="form-group">
                            <strong>Pelicula Id:</strong>
                            {{ $detalleactore->pelicula_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
