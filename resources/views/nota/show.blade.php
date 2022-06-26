@extends('layouts.app')

@section('template_title')
    {{ $nota->name ?? 'Show Nota' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-2">
                
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Nota</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('notas.index') }}"> Salir</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estudinte:</strong>
                            {{ $nota->estudinte_id }}
                        </div>
                        <div class="form-group">
                            <strong>Materia:</strong>
                            {{ $nota->materia_id }}
                        </div>
                        <div class="form-group">
                            <strong>Puntaje:</strong>
                            {{ $nota->puntaje }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
