@extends('layaouts.app')

@section('titulo', 'Detalle del curso')

@section('contenido')

    <div class="text-center">
        <img class=style="height: 400px; width:500px; margin:20px" src="{{Storage::url($cursito->imagen)}}" class="card-img-top mx-auto d-block" alt="...">
        <div class="card-body">
            <p class="card-text">{{$cursito->descripcion}}</p>
        </div>
        <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-info">Editar</a>
        <br>
        <br>
        <form class="form-group" action="/cursos/{{$cursito->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
            </button>
        </form>
    </div>
@endsection
