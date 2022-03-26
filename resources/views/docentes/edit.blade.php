@extends('layaouts.app')

@section('titulo','Editar docente')

@section('contenido')

    <br>
    <h3>Editar curso</h3>
    <form action="/docentes/{{$doc->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="nombredoc">Modificar nombre de docente</label>
            <input name="nombres" type="text" class="form-control" id="nombredoc" value="{{$doc->nombres}}">
        </div>
        <div class="form-group">
            <label for="apellidosdoc">Modificar apellidos del docente</label>
            <input name="apellidos" type="text" class="form-control" id="apellidosdoc" value="{{$doc->apellidos}}">
        </div>
        <div class="form-group">
            <label for="foto">Cargar nueva Imagen</label>
            <br>
            <input name="foto" type="file" id="foto">
        </div>
        <div class="form-group">
            <label for="titulodoc">Modificar titulo del docente</label>
            <input name="titulo" type="text" class="form-control" id="titulo" value="{{$doc->titulo}}">
        </div>
        <div class="form-group">
            <label for="Cursodoc">Modificar curso asociado</label>
            <input name="cursoAsociado" type="text" class="form-control" id="Cursodoc" value="{{$doc->cursoAsociado}}">
        </div>
        <button type="submit" class="btn btn-info">Actualizar</button>
    </form>

@endsection
