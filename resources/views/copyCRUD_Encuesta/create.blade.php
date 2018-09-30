@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Por favor llene la siguiente encuesta del curso: <br><strong>{{$encuesta->name}}</strong></h2>
                        <h3 class="card-text">del <strong>{{date("d-m-Y", strtotime($encuesta->inicio))}}</strong> al <strong>{{date("d-m-Y", strtotime($encuesta->final))}}</strong></h3>
                        <a href="{{route('Encuesta.ListaEncuestas')}}" class="btn btn-primary pull-right">Volver al listado</a>
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