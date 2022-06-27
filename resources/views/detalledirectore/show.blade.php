@extends('layouts.app')

@section('template_title')
    {{ $detalledirectore->name ?? 'Show Detalledirectore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Detalledirectore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalledirectores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Director Id:</strong>
                            {{ $detalledirectore->director_id }}
                        </div>
                        <div class="form-group">
                            <strong>Pelicula Id:</strong>
                            {{ $detalledirectore->pelicula_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
