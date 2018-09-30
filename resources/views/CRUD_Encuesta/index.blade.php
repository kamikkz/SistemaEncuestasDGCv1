@extends('layouts.NVAapp')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>ENCUESTAS</h2>
                        <a href="{{route('Encuesta.ListaEncuestas')}}" class="btn btn-primary pull-right color01">Crear Nueva Encuesta</a>
                        <a href="{{route('Encuesta.DatosEncuestas')}}" class="btn btn-outline-success">Contenido masivo de Encuestas</a>
                    </div>
                    <div class="card-body">
                        @include('info')
                        @include('error')
                        <table id="kami" class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Actividad</th>
                                <th>Participante</th>
                                <th>Fecha de llenado</th>
                                <th>Dirección</th>
                                <th>Dependencia</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($encuestas as $encuesta)
                                <tr>
                                    <td>{{$encuesta->curso->name}}</td>
                                    <td>{{$encuesta->user->name}}</td>
                                    <td>{{$encuesta->created_at}}</td>
                                    <td>{{$encuesta->user->direccion}}</td>
                                    <td>{{$encuesta->user->dependencia}}</td>
                                    <td>
                                        <a href="{{route('Encuesta.show',$encuesta->id)}}" class="btn  btn-success color03">Ver datos de encuesta</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection