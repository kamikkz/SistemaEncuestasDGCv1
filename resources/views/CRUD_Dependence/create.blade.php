@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Crear Dirección</h2>
                        <a href="{{route('generalManagements.index')}}" class="btn btn-primary pull-right">Volver al listado</a>
                    </div>
                    @include('error')
                    @include('info')
                    {!! Form::open(['route' => 'generalManagements.store']) !!}
                    @include ('recursos.direccionSIGI.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection