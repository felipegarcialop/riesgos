@extends('layouts.app')

@section('template_title')
    {{ $apoyo->name ?? "{{ __('Show') Apoyo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Apoyo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('apoyos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $apoyo->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $apoyo->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $apoyo->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $apoyo->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $apoyo->Correo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
