@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>DEPENDENCIAS</h2>
                        <a href="{{route('Dependence.create')}}" class="btn btn-primary pull-right">Crear Nueva Dependencia</a>
                    </div>
                    <div class="card-body">
                        @include('info')
                        @include('error')
                        <table id="kami" class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>READ</th>
                                <th>UPDATE</th>
                                <th>DELETE</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dependences as $dependence)
                                <tr>
                                    <td>{{$dependence->id}}</td>
                                    <td>{{$dependence->name}}</td>
                                    <td><a href="{{route('Dependence.show',$dependence->id)}}" class="btn  btn-success">Show</a></td>
                                    <td><a href="{{route('Dependence.edit',$dependence->id)}}" class="btn  btn-warning">Edit</a></td>
                                    <td>
                                        {!! Form::open(['route'=>['Dependence.destroy', $dependence->id],
                                                    'method'=>'DELETE']) !!}
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                        {!! Form::close() !!}
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