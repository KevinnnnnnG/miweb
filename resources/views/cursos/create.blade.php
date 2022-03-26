{{--Para poder heredar la plantilla necesito usar @extends--}}
@extends('layaouts.app')

@section('titulo','Crear registro')

@section('contenido')

    <br>
    <h3>Crear un curso</h3>
    <br>
    <form action="/cursos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombrecurso">Nombre del Curso</label>
            <input name="nombre" type="text" class="form-control" id="nombrecurso">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion del Curso</label>
            <input name="descripcion" type="text" class="form-control" id="descripcion">
        </div>
        <div class="form-group">
            <label for="imagen">Cargar Imagen</label>
            <br>
            <input name="imagen" type="file" id="imagen">
        </div>
        <button type="submit" class="btn btn-info">Crear</button>
    </form>

@endsection

