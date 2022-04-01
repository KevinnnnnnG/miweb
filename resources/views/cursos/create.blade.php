{{--Para poder heredar la plantilla necesito usar @extends--}}
@extends('layaouts.app')

@section('titulo','Crear registro')

@section('contenido')

    <br>
    <h3>Crear un curso</h3>
    <br>
    <form action="/cursos" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            @foreach ( $errors->all() as $alerta )
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <li>{{$alerta}}</li>
                    </ul>
                </div>
            @endforeach
        @endif
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
        <div class="form-group">
            <label for="horas">Horas del curso</label>
            <input name="horas" min="1" type="number" class="form-control" id="horas">
        </div>
        <button type="submit" class="btn btn-info">Crear</button>
    </form>

@endsection

