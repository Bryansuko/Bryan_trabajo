@extends('layouts.app')

@section('content')
    <h1>Agregar nuevo EmpleadoActividad</h1>
    <form action="{{ url('/empleadoactividad') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombreEmpleado">idempleado:</label>
            <input type="text" class="form-control" id="idempleado" name="idempleado" required>
        </div>
        <div class="form-group">
            <label for="nombreEmpleado">Nombre Empleado:</label>
            <input type="text" class="form-control" id="nombreEmpleado" name="nombreEmpleado" required>
        </div>
        <div class="form-group">
            <label for="actividad">Actividad:</label>
            <input type="text" class="form-control" id="actividad" name="actividad" required>
        </div>
        <div class="form-group">
            <label for="fechaInicio">Fecha Inicio:</label>
            <input type="date" class="form-control" id="fechaInicio" name="fechaInicio" required>
        </div>
        <div class="form-group">
            <label for="fechafin">Fecha Fin:</label>
            <input type="date" class="form-control" id="fechafin" name="fechafin" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="1">En curso</option>
                <option value="2">Finalizada</option>
                <!-- Agrega otras opciones según tus necesidades -->
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
