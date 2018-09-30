@extends('layouts.NVAapp')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>USUARIOS</h2>
                        <a href="{{route('usuarios.create')}}" class="btn btn-primary pull-right color04">Crear Nuevo Usuario</a>
                    </div>
                    <div class="card-body">
                        @include('info')
                        @include('error')
                        <table id="kami" class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Dependencia</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($usuarios as $usuario)
                                <tr>
                                    <td>{{$usuario->name}}</td>
                                    <td>{{$usuario->direccion}}</td>
                                    <td>{{$usuario->dependencia}}</td>
                                    <td>
                                        @if($cursos=\App\Curso::find($usuario->id))
                                            <a href="{{route('Usuarios.show',$usuario->id)}}" class="btn  btn-success color03">Ver cursos</a><br>
                                        @endif

                                        <a href="{{route('Usuarios.edit',$usuario->id)}}" class="btn  btn-warning color02">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection