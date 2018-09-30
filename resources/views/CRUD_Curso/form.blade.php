{!! Form::open(['route' => 'Curso.store']) !!}
<div class="card-body">
    <div class="form-group row">
        <div class="col-lg-12">
            <label for="name">Nombre de la Actividad</label>
            <input type="text" name="name" id="name" placeholder="Nombre del Curso" class="form-control form-text" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <label for="finicio">Fecha de Inicio</label>
            <input type="date" name="finicio" id="finicio" class="form-control" required>
        </div>
        <div class="col-lg-6">
            <label for="ffinal">Fecha de Termino</label>
            <input type="date" name="ffinal" id="ffinal" class="form-control" required>
        </div>
    </div>
    @csrf
    {!! Form::submit('Registrar',['class'=>'btn btn-primary form-control color01'])!!}
</div>
{!! Form::close() !!}