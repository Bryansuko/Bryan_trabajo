@extends('layouts.app')

@section('content')
    <h1>Editar EmpleadoActividad</h1>
    <form action="{{ url('/empleadoactividad/' . $data['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" class="form-control" id="id" name="id" value="{{ $data['id'] }}" required>
        </div>
        <div class="form-group">
            <label for="nombreEmpleado">Nombre Empleado:</label>
            <input type="text" class="form-control" id="nombreEmpleado" name="nombreEmpleado" value="{{ $data['nombreEmpleado'] }}" required>
        </div>
        <div class="form-group">
            <label for="actividad">Actividad:</label>
            <input type="text" class="form-control" id="actividad" name="actividad" value="{{ $data['actividad'] }}" required>
        </div>
        <div class="form-group">
            <label for="fechaInicio">Fecha Inicio:</label>
            <input type="date" class="form-control" id="fechaInicio" name="fechaInicio" value="{{ $data['fechaInicio'] }}" required>
        </div>
        <div class="form-group">
            <label for="fechafin">Fecha Fin:</label>
            <input type="date" class="form-control" id="fechafin" name="fechafin" value="{{ $data['fechafin'] }}" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="number" class="form-control" id="estado" name="estado" value="{{ $data['estado'] }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
@endsection