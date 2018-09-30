@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Crear Curso</h2>
                        <a href="{{route('Curso.index')}}" class="btn btn-primary pull-right">Volver al listado</a>
                    </div>
                    @include('error')
                    @include('info')
                    @include ('CRUD_Curso.form')

                </div>
            </div>
        </div>
    </div>
@endsection