@extends('layouts.app')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>Información masiva de actividades Registradas</h2>
                        <a href="{{route('Encuesta.index')}}" class="btn btn-primary pull-right color01">Regresar al listado</a>
                    </div>
                    <div class="card-body">
                        @include('info')
                        @include('error')
                        <table id="kami" class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Actividad</th>
                                <th>Participante</th>
                                <th>¿Cómo se sintió durante el desarrollo de la actividad?</th>
                                <th>¿Qué le pareció la actividad?</th>
                                <th>¿Cuál es su opinión de la actividad?</th>
                                <th>¿Considera que esta actividad genera valor para la institución?</th>
                                <th>¿Porque?</th>
                                <th>¿Puede aplicar lo aprendido en su área de desarrollo/trabajo?</th>
                                <th>¿Cómo va a aplicar los conocimientos adquiridos para mejorar los procesos de su dependencia?</th>
                                <th>¿Cómo le podríamos ayudar para aplicar los conocimientos adquiridos de forma exitosa en su dependencia?</th>
                                <th>Proporcione una fecha a partir de la cual podramos darle seguimiento</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($encuestas as $encuesta)
                                <tr>
                                    <td>{{$encuesta->curso->name}}</td>
                                    <td>{{$encuesta->user->name}}</td>
                                    <td>{{$encuesta->quiz1}}</td>
                                    <td>{{$encuesta->quiz2}}</td>
                                    <td>{{$encuesta->quiz3}}</td>
                                    <td>{{$encuesta->quiz4}}</td>
                                    <td>{{$encuesta->quiz5}}</td>
                                    <td>{{$encuesta->quiz6}}</td>
                                    <td>{{$encuesta->quiz7}}</td>
                                    <td>{{$encuesta->quiz8}}</td>
                                    <td>{{$encuesta->quiz9}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection