@extends('layouts.NVAapp')
@section('content')
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Crear Actividad</h2>
                        <a href="{{route('Curso.index')}}" class="btn btn-primary pull-right color04">Volver al listado</a>
                    </div>
                    @include('error')
                    @include('info')
                    @include ('CRUD_Curso.form')

                </div>
            </div>
@endsection