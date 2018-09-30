@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>ENCUESTAS</h2>
                        <a href="{{route('Encuesta.create')}}" class="btn btn-primary pull-right">Crear Nueva Encuesta</a>
                    </div>
                    <div class="card-body">
                        @include('info')
                        @include('error')
                        <table id="kami" class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Curso</th>
                                <th>Fechas</th>
                                <th>Creado</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($encuestas as $encuesta)
                                <tr>
                                    <td>{{$encuesta->id}}</td>
                                    <td>{{$encuesta->name}}</td>
                                    <td><a href="{{route('Encuesta.show',$encuesta->id)}}" class="btn  btn-success">Show</a></td>
                                    <td><a href="{{route('Encuesta.edit',$encuesta->id)}}" class="btn  btn-warning">Edit</a></td>
                                    <td>
                                        {!! Form::open(['route'=>['Encuesta.destroy', $encuesta->id],
                                                    'method'=>'DELETE']) !!}
                                        <button type="submit" class="btn btn-danger">Destroy</button>
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