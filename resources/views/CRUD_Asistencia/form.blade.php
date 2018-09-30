
<div class="card-body">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    {!! Form::open(['route' => 'Asistencia.registrarNVAasistencia']) !!}
                    <div class="card-header color01">Nuevo asistente a la Actividad: <strong> {{$cursos->name}}</strong></div>
                    <div class="card-body">
                        @csrf
                        <input type="hidden" value="{{$cursos->id}}" name="fkcurso" id="fkcurso">
                        <div class="form-group row">
                            <label for="direccion" class="col-form-label text-md-right">Dirección</label>
                            <div class="col-md-12">
                                <select required name="direccion" id="direccion" class="selectpicker show-tick form-control" data-live-search="true" required autofocus>
                                    {{$direcciones = DB::table('general_managements')->get()}}
                                    @foreach($direcciones as $direccion)
                                        <option value="{{$direccion->name}}">{{$direccion->id}} {{$direccion->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dependencia" class=" col-form-label text-md-right">Dependencia</label>
                            <div class="col-md-12">
                                <select required name="dependencia" id="dependencia" class="selectpicker show-tick form-control" data-live-search="true" required autofocus>
                                    {{$dependencias = DB::table('dependences')->get()}}
                                    @foreach($dependencias as $dependencia)
                                        <option value="{{$dependencia->name}}">{{$dependencia->general_management_id}} {{$dependencia->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-form-label text-md-right">Nombre</label>
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-form-label text-md-right">E-Mail Personal</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        {!! Form::submit('Registrar nuevo usuario y asistencia a la actividad',['class'=>'btn btn-primary form-control color02'])!!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    {!! Form::open(['route' => 'Asistencia.registrarAsistencia']) !!}
                    @csrf
                    <div class="card-header color01">Registrar Asistencia a la actividad: <strong> {{$cursos->name}}</strong></div>
                    <div class="card-body">
                        <input type="hidden" value="{{$cursos->id}}" name="fkcurso" id="fkcurso">
                        <div class="form-group row">
                            <label for="direccion" class="col-form-label text-md-right">Nombre de Usuario</label>
                            <div class="col-md-12">
                                <select name="name" id="name" class="selectpicker show-tick form-control" data-live-search="true" required autofocus>
                                    @foreach($usersCurso as $userC)
                                        <option value="{{$userC->id}}">{{$userC->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!--<div class="form-group row">
                            <label for="email" class="col-form-label text-md-right">E-Mail Personal</label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>-->
                    </div>
                    <div class="card-footer">
                        {!! Form::submit('Registrar asistencia a la actividad',['class'=>'btn btn-primary form-control color02'])!!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    {!! Form::open(['route' => 'Asistencia.registrarUSERAsistencia']) !!}
                    @csrf
                    <div class="card-header color01">Inscribir a la actividad:<strong> {{$cursos->name}}</strong></div>
                    <div class="card-body">
                        <input type="hidden" value="{{$cursos->id}}" name="fkcurso" id="fkcurso">
                        <div class="form-group row">
                            <label for="direccion" class="col-form-label text-md-right">Nombre de Usuario</label>
                            <div class="col-md-12">
                                <select name="name" id="name" class="selectpicker show-tick form-control" data-live-search="true" required autofocus>
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        {!! Form::submit('Inscribir a la actividad usuario ya existente',['class'=>'btn btn-primary form-control color02'])!!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
