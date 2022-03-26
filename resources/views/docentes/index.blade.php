@extends('layaouts.app')

@section('contenido')
    <h3>Listado de docentes</h3>
    <div class="row">
    @foreach ($doc  as $kevin)
        <div class="col-sm">
            <div class="card text-center" style="width: 18rem; margin-top:30px">
                <img class="card-img-top mx-auto d-block" height="130" width="130" style="margin:20px" src="{{Storage::url($kevin->foto)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$kevin->nombres}}</h5>
                    <p class="card-text">{{$kevin->apellidos}}</p>
                    <p class="card-text">{{$kevin->titulo}}</p>
                    <p class="card-text">{{$kevin->cursoAsociado}}</p>
                    <a href="/docentes/{{$kevin->id}}" class="btn btn-info">Ver más</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection

