@extends('layouts.NVAapp')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>Asistencias</h2>
                    </div>
                    <div class="card-body">
                        @include('info')
                        @include('error')
                        <table id="kami" class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Curso</th>
                                <th>Fecha</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($asistencias as $asistencia)
                                <tr>
                                    <td>{{$asistencia->user->name}}</td>
                                    <td>{{$asistencia->curso->name}}</td>
                                    <td>{{date("d-m-Y", strtotime($asistencia->asiste))}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection