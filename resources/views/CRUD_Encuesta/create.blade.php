@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Su opinión es importante para mejorar nuestro trabajo y brindarle un mejor sevicio.
                            Por ello le pedimos nos apoye llenando la siguiente encuesta de la actividad: <br><strong>{{$encuesta->name}}</strong></h2>
                        <h3 class="card-text" align="center">Dirección General de Planeación<br>Dirección de Gestión de la Calidad</h3>
                        <a href="{{route('Encuesta.ListaEncuestas')}}" class="btn btn-primary pull-right color01">Volver al listado</a>
                    </div>
                    @include('error')
                    @include('info')
                    {!! Form::open(['route' => 'Encuesta.store']) !!}
                    @include ('CRUD_Encuesta.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection