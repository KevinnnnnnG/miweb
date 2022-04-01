@extends('layaouts.app')
@section('titulo','Crear Docente')

@section('contenido')
<br>
    <h3>Crear un docente</h3>
    <br>
    <form action="/docentes" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombredoc">Nombre del docente</label>
            <input name="nombres" type="text" class="form-control" id="nombredoc">
        </div>
        <div class="form-group">
            <label for="apellidoc">Nombre de apellidos</label>
            <input name="apellidos" type="text" class="form-control" id="apellidoc">
        </div>
        <div class="form-group">
            <label for="foto">Cargar Imagen</label>
            <br>
            <input name="foto" type="file" id="foto">
        </div>
        <div class="form-group">
            <label for="titulodoc">Titulo del docente</label>
            <input name="titulo" type="text" class="form-control" id="titulodoc">
        </div>
        <div class="form-group">
            <label for="Cursodoc">Curso asociado</label>
            <input name="cursoAsociado" type="text" class="form-control" id="Cursodoc">
        </div>
        <button type="submit" class="btn btn-info">Crear</button>
    </form>
@endsection
