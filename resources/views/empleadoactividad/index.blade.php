@extends('layouts.app')

@section('content')
    <h1>Listado de EmpleadoActividad</h1>
    <a href="{{ url('/empleadoactividad/create') }}" class="btn btn-primary">Agregar nuevo</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Id empleado</th>
                <th>Nombre Empleado</th>
                <th>Actividad</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $empleadoactividad)
                <tr>
                    <td>{{ $empleadoactividad['id'] }}</td>
                    <td>{{ $empleadoactividad['idempleado'] }}</td>
                    <td>{{ $empleadoactividad['nombreEmpleado'] }}</td>
                    <td>{{ $empleadoactividad['actividad'] }}</td>
                    <td>{{ $empleadoactividad['fechaInicio'] }}</td>
                    <td>{{ $empleadoactividad['fechafin'] }}</td>
                    <td>{{ $empleadoactividad['estado'] }}</td>
                    <td>
                        <a href="{{ url('/empleadoactividad/' . $empleadoactividad['id']) }}" class="btn btn-info">Ver</a>
                        <a href="{{ url('/empleadoactividad/' . $empleadoactividad['id'] . '/edit') }}" class="btn btn-primary">Editar</a>
                        <form action="{{ url('/empleadoactividad/' . $empleadoactividad['id']) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
