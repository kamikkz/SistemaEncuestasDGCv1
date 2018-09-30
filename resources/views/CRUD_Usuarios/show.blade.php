@extends('layouts.NVAapp')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>Ver actividades del usuario: {{$usuario->name}}</h2>
                        <h4>{{$usuario->direccion}}</h4>
                        <h5>{{$usuario->dependencia}}</h5>
                        <a href="{{route('Usuarios.index')}}" class="btn btn-primary pull-right color04">Volver al listado</a>
                    </div>
                    <div class="card-body">
                        @include('info')
                        @include('error')
                        <h3>Cursos del Usuario {{$usuario->name}}</h3>
                        <table id="kami" class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Nombre del curso</th>
                                <th>F Inicio</th>
                                <th>F Final</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cursos as $curso)
                                <tr>
                                    <td>{{$curso->name}}</td>
                                    <td>{{$curso->inicio}}</td>
                                    <td>{{$curso->final}}</td>
                                    <td><a href="{{route('Asistencia.UserCursoAsistencia',array('user'=>$usuario->id,'course'=>$curso->id))}}" class="btn btn-primary color01">Ver Asistencias</a><br>
                                        <a href="{{route('Usuarios.edit',$usuario->id)}}" class="btn  btn-warning color03">Editar datos del usuario</a><br>
                                        @if($encuesta=\App\Encuesta::find($curso->id))
                                        <a href="{{route('Encuesta.show',$curso->id)}}" class="btn  btn-dark color02">Ver Encuesta</a>
                                            @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection