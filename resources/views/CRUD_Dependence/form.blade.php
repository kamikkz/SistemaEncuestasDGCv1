<div class="card-body">
    <div class="form-group row">
        <div class="col-lg-12">
            <label for="name">Dirección</label>
            <input type="text" name="name" id="name" placeholder="Dirección" class="form-control form-text" value="" required>
        </div>
    </div>
    @csrf
    {!! Form::submit('Registrar',['class'=>'btn btn-primary form-control'])!!}
</div>