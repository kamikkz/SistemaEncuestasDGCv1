@extends('layouts.NVAapp')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Crear nuevo Usuario</h2>
                        <a href="{{route('Usuarios.index')}}" class="btn btn-primary pull-right color04">Volver al listado</a>
                    </div>
                    @include('error')
                    @include('info')
                    {!! Form::open(['route' => 'Usuarios.store']) !!}
                    @include ('CRUD_Usuarios.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection