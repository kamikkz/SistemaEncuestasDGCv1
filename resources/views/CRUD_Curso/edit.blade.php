@extends('layouts.NVAapp')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Editar Actividad: {{$cursos->name}}</h2>
                        <h4>Fecha de inicio:     {{$cursos->inicio}}</h4>
                        <h4>Fecha de termino:    {{$cursos->final}}</h4>
                        <a href="{{route('Curso.index')}}" class="btn btn-primary pull-right color04">Volver al listado</a>
                    </div>
                    @include('error')
                    @include('info')
                    {!! Form::model($cursos,['route'=>['Curso.update',$cursos->id],'method'=>'PUT']) !!}
                    @include ('CRUD_Curso.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection