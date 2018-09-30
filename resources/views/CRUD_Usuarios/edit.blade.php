@extends('layouts.NVAapp')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Editar datos del usuario: {{$user->name}}</h2>
                        <h3>Dirección: {{$user->direccion}}</h3>
                        <h3>Dependencia: {{$user->dependencia}}</h3>
                        <h3>Correo: {{$user->email}}</h3>
                        <a href="{{route('Usuarios.index')}}" class="btn btn-primary pull-right color04">Volver al listado</a>
                    </div>
                    @include('error')
                    @include('info')
                    {!! Form::model($user,['route'=>['Usuarios.update',$user->id],'method'=>'PUT']) !!}
                    @include ('CRUD_Usuarios.formU')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection