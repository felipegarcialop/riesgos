@extends('layouts.app')

@section('template_title')
    {{ $recurso->name ?? "{{ __('Show') Recurso" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Recurso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recursos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $recurso->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Objetivo:</strong>
                            {{ $recurso->Objetivo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $recurso->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tema:</strong>
                            {{ $recurso->id_tema }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
