@extends('layaouts.app')

@section('titulo','listado de cursos')

@section('contenido')

    <h3>Listado de cursos</h3>

    {{--foreach es un ciclo o bucle especial para trabajar con arrays--}}
    {{--recorderis: existen ciclos como while, for, do while, foreach--}}
    <div class="row">{{--tenemos la fila--}}
    @foreach ($cursito as $diaz)
        {{--para llamar informacion de php basta con interpolar las variables usando la doble llave--}}


        <div class="col-sm">{{--Abrimos columna--}}
            <div class="card text-center" style="width: 18rem; margin-top:30px">
                <img class="card-img-top mx-auto d-block" height="130" width="130" style="margin:20px" src="{{Storage::url($diaz->imagen)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$diaz->nombre}}</h5>
                    <p class="card-text">{{$diaz->descripcion}}</p>
                    <a href="/cursos/{{$diaz->id}}" class="btn btn-info">Ver más</a>
                </div>
            </div>
        </div>

    @endforeach
    </div>
@endsection
