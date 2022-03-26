@extends('layaouts.app')

@section('titulo', 'Detalle del docente')

@section('contenido')

    <div class="text-center">
        <img class=style="height: 400px; width:500px; margin:20px" src="{{Storage::url($doc->foto)}}" class="card-img-top mx-auto d-block" alt="...">
        <div class="card-body">
            <p class="card-text">{{$doc->nombres}}</p>
        </div>
        <a href="/docentes/{{$doc->id}}/edit" class="btn btn-info">Editar</a>
    </div>
@endsection
