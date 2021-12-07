<div class="row">
    <div class="col s12">
        <div class="container">
            <div class="section">
                <div class="card">
                    <div class="card-content">
                        <h1>DIAGNÓSTICO DE IGUALDAD DE TRATO Y OPORTUNIDADES ENTRE MUJERES Y HOMBRES.</h1>
                        <div class="row">
                            <div class="col s12">
                                <h5 style="text-align: left;">Datos generales</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label for="sexo" class="control-label">Sexo: *</label>
                                    {!! Form::select('registro[sexo]',$sexo, isset($responsable) ? $responsable->sexo : [], ['class' => 'browser-default form-control text-uppercase  ', 'placeholder'=>'Seleccione una opción', 'id' => 'sexo', 'name' => 'sexo', 'required' => true]) !!}
                                </div>
                            </div>
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label for="edad" class="control-label">Edad: *</label>
                                    {!! Form::select('registro[edad]',$edades, isset($responsable) ? $responsable->edad : [], ['class' => 'browser-default form-control text-uppercase   ', 'placeholder'=>'Seleccione una opción', 'id' => 'edad', 'name' => 'edad', 'required' => true]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label for="estado_civil" class="control-label">Estado civil o conyugal: *</label>
                                    {!! Form::select('registro[estado_civil]',$estadoC, isset($responsable) ? $responsable->estado_civil : [], ['class' => 'browser-default form-control text-uppercase   ', 'placeholder'=>'Seleccione una opción', 'id' => 'estado_civil', 'name' => 'estado_civil', 'required' => true]) !!}
                                </div>
                            </div>
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label for="discapacidad" class="control-label">¿Tiene alguna discapacidad? *</label>
                                    {!! Form::select('registro[discapacidad]',$discapacidad, isset($responsable) ? $responsable->discapacidad : [], ['class' => 'browser-default form-control text-uppercase   ', 'placeholder'=>'Seleccione una opción', 'id' => 'discapacidad', 'name' => 'discapacidad', 'required' => true]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label for="antiguedad_legis" class="control-label">Antigüedad en el Poder Legislativo: *</label>
                                    {!! Form::select('registro[antiguedad_legis]',$antiguedad, isset($responsable) ? $responsable->antiguedad_legis : [], ['class' => 'browser-default form-control text-uppercase   ', 'placeholder'=>'Seleccione una opción', 'id' => 'antiguedad_legis', 'name' => 'antiguedad_legis', 'required' => true]) !!}
                                </div>
                            </div>
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label for="antiguedad_puesto" class="control-label">Antigüedad en el puesto: *</label>
                                    {!! Form::select('registro[antiguedad_puesto]',$antiguedad, isset($responsable) ? $responsable->antiguedad_puesto : [], ['class' => 'browser-default form-control text-uppercase   ', 'placeholder'=>'Seleccione una opción', 'id' => 'antiguedad_puesto', 'name' => 'antiguedad_puesto', 'required' => true]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label for="nivel_puesto" class="control-label">Nivel de puesto: *</label>
                                    {!! Form::select('registro[nivel_puesto]',$nivelPuesto, isset($responsable) ? $responsable->nivel_puesto : [], ['class' => 'browser-default form-control text-uppercase   ', 'placeholder'=>'Seleccione una opción', 'id' => 'nivel_puesto', 'name' => 'nivel_puesto', 'required' => true]) !!}
                                </div>
                            </div>
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label for="tipo_contrato" class="control-label">Tipo de contratación: *</label>
                                    {!! Form::select('registro[tipo_contrato]',$tipoContrato, isset($responsable) ? $responsable->tipo_contrato : [], ['class' => 'browser-default form-control text-uppercase   ', 'placeholder'=>'Seleccione una opción', 'id' => 'tipo_contrato', 'name' => 'tipo_contrato', 'required' => true]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m10 s12">
                            </div>
                            <div class="col m2 s12">
                                <button class="waves-effect waves-dark btn btn-primary" type="submit">
                                    Guardar Registro
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
