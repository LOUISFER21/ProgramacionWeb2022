@extends('layouts.app')

@section('template_title')
    Crear Devolucion
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-md-8">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Devolucion</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('devoluciones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('devolucione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
