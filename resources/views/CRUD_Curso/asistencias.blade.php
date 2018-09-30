@extends('layouts.NVAapp')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h1>Ver asistencia de: <strong>{{$usuario->name}}</strong></h1>
                        <h2> a la actividad: <strong>{{$curso->name}}</strong></h2>
                        <h3>del {{date("d-m-Y", strtotime($curso->inicio))}} al {{date("d-m-Y", strtotime($curso->final))}}</h3>
                        <a href="{{route('Curso.index')}}" class="btn btn-primary pull-right color04">Volver al listado</a>
                    </div>
                    <div class="card-body">
                        @include('info')
                        @include('error')
                        <h4>Asistencias</h4>
                        <table id="kami" class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>ID asistencia</th>
                                <th>Fecha</th>
                                <!--<th>Registro</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($asistencias as $asistencia)
                                <tr>
                                    <td>{{$asistencia->id}}</td>
                                    <td align="center">{{date("d-m-Y", strtotime($asistencia->asiste))}}</td>
                                    <!--<td>{{$asistencia->created_at}}</td>-->
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection