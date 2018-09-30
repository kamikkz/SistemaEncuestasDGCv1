@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Registro de participantes al curso:</h2>
                        <h1>{{$cursos->name}}</h1>
                        <h3>del {{$cursos->inicio}} al {{$cursos->final}}</h3>
                        <a href="{{route('Curso.index')}}" class="btn btn-primary pull-right">Volver al listado</a>
                    </div>
                    @include('error')
                    @include('info')
                    @include ('CRUD_Asistencia.form')
                </div>
            </div>
        </div>
    </div>
@endsection