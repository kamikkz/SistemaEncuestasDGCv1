@extends('layouts.NVAapp')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>Registro de participantes a la Actividad:</h2>
                        <h1>{{$cursos->name}}</h1>
                        <h3>del {{$cursos->inicio}} al {{$cursos->final}}</h3>
                        <a href="{{route('Curso.index')}}" class="btn btn-primary pull-right color04">Volver al listado</a>
                    </div>
                    @include('error')
                    @include('info')
                    @include ('CRUD_Asistencia.form')
                </div>
@endsection