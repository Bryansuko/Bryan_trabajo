@extends('layouts.app')

@section('template_title')
    {{ $asignacion->name ?? "{{ __('Show') Asignacion" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Asignacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('asignacions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Usuarios Id:</strong>
                            {{ $asignacion->usuarios_id }}
                        </div>
                        <div class="form-group">
                            <strong>Rol Id:</strong>
                            {{ $asignacion->rol_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
