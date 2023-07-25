@extends('layouts.app')

@section('template_title')
    {{ $empleca->name ?? "{{ __('Show') Empleca" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empleca</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('emplecas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Empleado Id:</strong>
                            {{ $empleca->empleado_id }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera Id:</strong>
                            {{ $empleca->carrera_id }}
                        </div>
                        <div class="form-group">
                            <strong>Periodo Id:</strong>
                            {{ $empleca->periodo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fechafin:</strong>
                            {{ $empleca->fechafin }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $empleca->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
