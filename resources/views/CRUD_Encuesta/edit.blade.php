@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Editar Dirección</h2>
                        {{$generalManagement->id}} {{$generalManagement->name}}
                        <a href="{{route('generalManagements.index')}}" class="btn btn-primary pull-right color01">Volver al listado</a>
                    </div>
                    @include('error')
                    @include('info')
                    {!! Form::model($generalManagement,['route'=>['generalManagements.update',$generalManagement->id],'method'=>'PUT']) !!}
                    @include ('recursos.direccionSIGI.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection