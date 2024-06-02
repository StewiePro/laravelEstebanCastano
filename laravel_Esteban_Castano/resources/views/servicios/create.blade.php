@extends('layouts.app')

@section('titulo', 'crear servicio')

@section('contenido')
    <br>
    <h3>Crear un nuevo servicio</h3>
    <form action="/servicios" method="post">
        @csrf
        <div class="mb-3">
            <label for="nombreservicio" class="form-label">Nombre del servicio</label>
            <input type="text" class="form-control" id="nombre" name="nombre" >
        </div>
        <div class="mb-3">
            <label for="descripcionservicio" class="form-label">Descripción del servicio</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" >
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection
