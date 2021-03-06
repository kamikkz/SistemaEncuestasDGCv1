@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>CURSOS</h2>
                        <a href="{{route('Curso.create')}}" class="btn btn-primary pull-right">Crear Nueva Dirección</a>
                    </div>
                    <div class="card-body">
                        @include('info')
                        @include('error')
                        <table id="kami" class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>F inicio</th>
                                <th>F termina</th>
                                <th>Creado</th>
                                <th>ACCIONES</th>
                                <th>REGISTRO</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cursos as $curso)
                                <tr>
                                    <td>{{$curso->name}}</td>
                                    <td>{{date("d-m-Y", strtotime($curso->inicio))}}</td>
                                    <td>{{date("d-m-Y", strtotime($curso->final))}}</td>
                                    <td>{{$curso->created_at}}</td>
                                    <td>
                                        <ul>
                                            <li><a href="{{route('Curso.show',$curso->id)}}" class="btn  btn-success">Show</a></li>
                                            <li><a href="{{route('Curso.edit',$curso->id)}}" class="btn  btn-warning">Edit</a></li>
                                            <li>{!! Form::open(['route'=>['Curso.destroy', $curso->id],
                                                    'method'=>'DELETE']) !!}
                                                <button type="submit" class="btn btn-danger">Destroy</button>
                                                {!! Form::close() !!}</li>
                                        </ul>
                                    </td>
                                    <td><a href="{{route('Asistencia.edit',$curso->id)}}" class="btn btn-dark">Asistencia</a></td>
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