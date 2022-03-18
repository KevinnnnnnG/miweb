@extends('layaouts.app')

@section('titulo','Editar curso')

@section('contenido')

    <br>
    <h3>Editar curso</h3>
    <form action="/cursos/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="nombrecurso">Modifique nombre Curso</label>
            <input name="nombre" type="text" class="form-control" id="nombrecurso" value="{{$cursito->nombre}}">
        </div>
        <div class="form-group">
            <label for="descripcion">Modifique descripcion Curso</label>
            <input name="descripcion" type="text" class="form-control" id="descripcion" value="{{$cursito->descripcion}}">
        </div>
        <div class="form-group">
            <label for="imagen">Cargar nueva Imagen</label>
            <br>
            <input name="imagen" type="file" id="imagen">
        </div>
        <button type="submit" class="btn btn-danger">Actualizar</button>
    </form>

@endsection
