@extends('layouts.app')

@section('template_title')
    Editar Devolucion
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="rom">
            <div class="col-sm-2"></div>
            <div class="col-md-8">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Edición Devolución</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('devoluciones.update', $devolucione->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('devolucione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
