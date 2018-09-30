<div class="card-body">
    <input type="hidden" value="{{$encuesta->id}}" name="fk">

    <div class="form-group row">
        <div class="col-lg-12 ">
            <label for="quiz1">¿Cómo se sintió durante el desarrollo de la actividad?</label><br>
            <div class="radioStyle">
                <input type="radio" name="quiz1" value="Insatisfecho" class="form-check form-check-inline" id="radio_01" required><label for="radio_01"><i class="em em-tired_face"></i></label>
                <input type="radio" name="quiz1" value="Confundido" class="form-check form-check-inline" id="radio_02"><label for="radio_02"><i class="em em-slightly_frowning_face"></i></label>
                <input type="radio" name="quiz1" value="Conforme" class="form-check form-check-inline" id="radio_03"><label for="radio_03"><i class="em em-neutral_face"></i></label>
                <input type="radio" name="quiz1" value="Satisfecho" class="form-check form-check-inline" id="radio_04"><label for="radio_04"><i class="em em-slightly_smiling_face"></i></label>
                <input type="radio" name="quiz1" value="Motivado" class="form-check form-check-inline" id="radio_05" checked><label for="radio_05"><i class="em em-smiley"></i></label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-12">
            <label for="quiz2">¿Qué le pareció la actividad?</label><br>
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
            <label for="quiz3">¿Cuál es su opinión de la actividad?</label><br>
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
            <label for="quiz6">¿Puede aplicar lo aprendido en su área de desarrollo/trabajo?</label>
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
            <label for="quiz8">¿Cómo le podríamos ayudar para aplicar los conocimientos adquiridos de forma exitosa en su dependencia?</label>
            <textarea rows="3" class="form-control" name="quiz8" required maxlength="400"></textarea>
        </div>
        <div class="col-lg-6">
            <label for="quiz9">Proporcione una fecha a partir de la cual podramos darle seguimiento</label>
            <input type="date" class="form-control" name="quiz9" id="quiz9" required>
        </div>
    </div>
    @csrf
    {!! Form::submit('Enviar encuesta',['class'=>'btn btn-primary form-control color01'])!!}
</div>