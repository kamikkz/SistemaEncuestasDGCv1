<div class="card-body">
    <input type="hidden" value="{{$encuesta->id}}" name="fk">

    <div class="form-group row">
        <div class="col-lg-12">
            <label for="quiz1">¿Cómo te sentiste en el curso?</label><br>
            <input type="radio" name="quiz1" value="feliz" class="form-check form-check-inline" id="radio_01" required>feliz
            <input type="radio" name="quiz1" value="contento" class="form-check form-check-inline" id="radio_02">contento
            <input type="radio" name="quiz1" value="neutral" class="form-check form-check-inline" id="radio_03">neutral
            <input type="radio" name="quiz1" value="triste" class="form-check form-check-inline" id="radio_04">triste
            <input type="radio" name="quiz1" value="deprimido" class="form-check form-check-inline" id="radio_05">deprimido
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-12">
            <label for="quiz2">¿Qué le pareció el curso?</label><br>
            <select name="quiz2[]" id="quiz2" class="form-control" multiple required>
                <option value="Útil">Útil</option>
                <option value="Interesante">Interesante</option>
                <option value="Importante">Importante</option>
                <option value="Irrelevante">Irrelevante</option>
                <option value="Fuera de contexto">Fuera de contexto</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-12">
            <label for="quiz3">¿Cuál es su opinión del curso?</label><br>
            <textarea rows="3" class="form-control" name="quiz3" required maxlength="400"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <label for="quiz4">¿Considera que esta actividad genera valor para la institución?</label>
            <select name="quiz4" id="quiz4" class="form-control" required>
                <option disabled selected value></option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="col-lg-6">
                <label for="quiz5">¿Porque?</label>
                <textarea rows="3" class="form-control" name="quiz5" required maxlength="400"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-12">
            <label for="quiz6">¿Le gustaría implementar lo aprendido en su área de desarrollo/trabajo?</label>
            <select name="quiz6" id="quiz6" class="form-control" required>
                <option disabled selected value></option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-12">
            <label for="quiz7">¿Cómo va a aplicar los conocimientos adquiridos para mejorar los procesos de su dependencia?</label><br>
            <textarea rows="3" class="form-control" name="quiz7" required maxlength="400"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <label for="quiz8">¿Cómo le podríamos ayudar?</label>
            <textarea rows="3" class="form-control" name="quiz8" required maxlength="400"></textarea>
        </div>
        <div class="col-lg-6">
            <label for="quiz9">Proporcione una fecha a partir de la cual podramos darle seguimiento</label>
            <input type="date" class="form-control" name="quiz9" id="quiz9" required>
        </div>
    </div>
    @csrf
    {!! Form::submit('Enviar encuesta',['class'=>'btn btn-primary form-control'])!!}
</div>