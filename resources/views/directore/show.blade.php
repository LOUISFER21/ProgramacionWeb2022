@extends('layouts.app')

@section('template_title')
    {{ $directore->name ?? 'Show Directore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Directore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('directores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Persona Id:</strong>
                            {{ $directore->persona_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombreartistico:</strong>
                            {{ $directore->nombreartistico }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
