@extends('layouts.NVAapp')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Editar Fecha Limite para llenado de Actividad: {{$cursos->name}}</h2>
                        <h4>Fecha de inicio:     {{$cursos->inicio}}</h4>
                        <h4>Fecha de termino:    {{$cursos->final}}</h4>
                        <a href="{{route('Curso.index')}}" class="btn btn-primary pull-right color04">Volver al listado</a>
                    </div>
                    @include('error')
                    @include('info')
                    {!! Form::model($cursos,['route'=>['Curso.tiempoExtraUpdate',$cursos->id],'method'=>'PUT']) !!}
                    {!! Form::open(['route' => 'Curso.store']) !!}
                    <div class="card-body">

                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label for="tiempoExtra">Fecha de Limite para llenado</label>
                                <input type="date" name="tiempoExtra" id="tiempoExtra" class="form-control" required>
                            </div>
                        </div>
                        @csrf
                        {!! Form::submit('Registrar',['class'=>'btn btn-primary form-control color01'])!!}
                    </div>
                    {!! Form::close() !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection