@extends('layouts.app')

@section('content')
    <h1>Detalles de EmpleadoActividad</h1>
    <p><strong>ID:</strong> {{ $data['idempleado'] }}</p>
    <p><strong>Nombre Empleado:</strong> {{ $data['nombreEmpleado'] }}</p>
    <p><strong>Actividad:</strong> {{ $data['actividad'] }}</p>
    <p><strong>Fecha Inicio:</strong> {{ $data['fechaInicio'] }}</p>
    <p><strong>Fecha Fin:</strong> {{ $data['fechafin'] }}</p>
    <p><strong>Estado:</strong> {{ $data['estado'] }}</p>
    <a href="{{ url('/empleadoactividad/' . $data['idempleado'] . '/edit') }}" class="btn btn-primary">Editar</a>
    <form action="{{ url('/empleadoactividad/' . $data['idempleado']) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
@endsection
