@extends('layouts.NVAapp')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>Ver datos de encuesta</h2>
                        <h3>Actividad: {{$datos->curso->name}}</h3>
                        <h3>Participante: {{$datos->user->name}}</h3>
                        <h4>Dirección: {{$datos->user->direccion}}</h4>
                        <h5>Dependencia: {{$datos->user->dependencia}}</h5>
                        <h6>Fecha de llenado de encuesta: {{$datos->created_at}}</h6>
                        <a href="{{route('Encuesta.index')}}" class="btn btn-primary pull-right color01">Volver al listado</a>
                    </div>
                    <div class="card-body">
                        @include('info')
                        @include('error')
                        <table id="kami" class="table table-hover table-striped" border="1">
                            <tbody>
                            <tr>
                                <th align="right">¿Cómo te sentiste en el curso?</th>
                                <td>{{$datos->quiz1}}</td>
                            </tr>
                            <tr>
                                <th align="right">¿Qué le pareció el curso?</th>
                                <td>{{$datos->quiz2}}</td>
                            </tr>
                            <tr>
                                <th align="right">¿Cuál es su opinión del curso?</th>
                                <td>{{$datos->quiz3}}</td>
                            </tr>
                            <tr>
                                <th align="right">¿Considera que esta actividad genera valor para la institución?</th>
                                <td>{{$datos->quiz4}}</td>
                                <th>¿Porque?</th>
                                <td>{{$datos->quiz5}}</td>
                            </tr>
                            <tr>
                                <th align="right">¿Le gustaría implementar lo aprendido en su área de desarrollo/trabajo?</th>
                                <td>{{$datos->quiz6}}</td>
                            </tr>
                            <tr>
                                <th align="right">¿Cómo va a aplicar los conocimientos adquiridos para mejorar los procesos de su dependencia?</th>
                                <td>{{$datos->quiz7}}</td>
                            </tr>
                            <tr>
                                <th align="right">¿Cómo le podríamos ayudar?</th>
                                <td>{{$datos->quiz8}}</td>
                                <th>Proporcione una fecha a partir de la cual podramos darle seguimiento</th>
                                <td><h4>{{$datos->quiz9}}</h4></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection