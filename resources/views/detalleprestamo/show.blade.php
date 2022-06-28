@extends('layouts.app')

@section('template_title')
    {{ $detalleprestamo->name ?? 'Show Detalleprestamo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Detalleprestamo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalleprestamos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Socio Id:</strong>
                            {{ $detalleprestamo->socio_id }}
                        </div>
                        <div class="form-group">
                            <strong>Prestamo Id:</strong>
                            {{ $detalleprestamo->prestamo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cinta Id:</strong>
                            {{ $detalleprestamo->cinta_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
