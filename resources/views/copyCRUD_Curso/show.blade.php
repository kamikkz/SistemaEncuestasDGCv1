@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Ver participandes del curso:</h2>
                        <h3><strong>{{$curso->name}}</strong></h3>
                        <a href="{{route('Curso.index')}}" class="btn btn-primary pull-right">Volver al listado</a>
                    </div>
                    <div class="card-body">
                        @include('info')
                        @include('error')
                        <h4>Participantes</h4>
                        <table id="kami" class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Direccion</th>
                                <th>Dependencia</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($usuarios as $usuario)
                                <tr>
                                    <td>{{$usuario->name}}</td>
                                    <td>{{$usuario->email}}</td>
                                    <td>{{$usuario->direccion}}</td>
                                    <td>{{$usuario->dependencia}}</td>
                                    <td>
                                        <a href="{{route('Asistencia.UserCursoAsistencia',array('user'=>$usuario->id,'course'=>$curso->id))}}" class="btn btn-primary pull-right">Ver Asistencias</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection