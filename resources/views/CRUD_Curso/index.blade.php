@extends('layouts.NVAapp')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>ACTIVIDADES</h2>
                        <a href="{{route('Curso.create')}}" class="btn btn-primary pull-right color04">Crear Nueva Actividad</a>

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
                                <th>T extra</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cursos as $curso)
                                <tr>
                                    <td>{{$curso->name}}</td>
                                    <td>{{date("d-m-Y", strtotime($curso->inicio))}}</td>
                                    <td>{{date("d-m-Y", strtotime($curso->final))}}</td>
                                    <td>{{date("d-m-Y", strtotime($curso->tiempoExtra))}}</td>
                                    <td>
                                        <a href="{{route('Asistencia.edit',$curso->id)}}" class="btn btn-dark color02">Registrar Asistencia</a><br>
                                            <a href="{{route('Curso.show',$curso->id)}}" class="btn  btn-success color03">Participantes</a><br>
                                        <a href="{{route('Curso.edit',$curso->id)}}" class="btn btn-warning color01">Edit</a><br>
                                        <a href="{{route('Curso.tiempoExtra',$curso->id)}}" class="btn btn-danger color04">Textra</a><br>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

@endsection