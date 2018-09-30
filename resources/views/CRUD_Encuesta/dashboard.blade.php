@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>ACTIVIDADES DONDE HE ASISTIDO:</h2>
                    </div>
                    <div class="card-body">
                        @include('info')
                        @include('error')
                        @foreach($cursos as $curso)
                            @if(($curso->tiempoExtra)>now())
                                @else
                                <div class="card text-center">
                                    <div class="card-header">
                                        <h5 class="card-title">Actividad: <strong>{{$curso->name}}</strong></h5>
                                        <p class="card-text">del <strong>{{date("d-m-Y", strtotime($curso->inicio))}}</strong> al <strong>{{date("d-m-Y", strtotime($curso->final))}}</strong></p>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Presione el siguiente boton para llenar la encuesta</p>
                                        <a href="{{route('Encuesta.LlenarEncuesta',$curso->id)}}" class="btn btn-primary btn-block color01">LLENAR ENCUESTA</a>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Gracias por su tiempo y apoyo estamos para servirle
                                    </div>
                                </div>
                                <br><br>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
