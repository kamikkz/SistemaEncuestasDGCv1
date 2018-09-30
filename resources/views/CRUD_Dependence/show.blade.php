@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Ver Dirección</h2>
                        <a href="{{route('generalManagements.index')}}" class="btn btn-primary pull-right">Volver al listado</a>
                    </div>
                    <div class="card-body">
                        @include('info')
                        @include('error')
                        <table id="" class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>Creado</th>
                                <th>Actualizado</th>
                            </tr>
                            </thead>
                            <tbody>
                            <td>{{$generalManagement->id}}</td>
                            <td>{{$generalManagement->name}}</td>
                            <td>{{$generalManagement->created_at}}</td>
                            <td>{{$generalManagement->updated_at}}</td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection