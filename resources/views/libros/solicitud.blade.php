<div class="container">
    <div class="section">


        <div class="row"  style="background-color: rgba(198, 198, 198, .5);">
            <div class="row">
                <div class="col s12">
                    <div class="card-content">
                        <center>
                            <img style="width: 90%;"
                                 src="{{ asset('genero/images/logo/banner_logos.png' ) }}">
                        </center>
                    </div>
                </div>
            </div>
        </div>



        <div class="card">
            <div class="card-content">
                <div class="row">
                    <div class="input-field col m4">
                        <br>
                        <br>
                        <br>
                        <img class="materialboxed"
                             src="{{ asset('genero/images/libros/' . $libro->id . '.png') }}"
                             style="width: 100%; " alt="name" class="circle"
                             title="Titulo: {{ $libro->nombre }} / Autor: {{ $libro->autor }}">
                        <br>
                    </div>

                    <div class="input-field col m8">

                        <div class="row">
                            <h1>Formato de préstamo de libro(s)</h1>

                            La <strong>persona servidora pública solicitante</strong> deberá:
                            <ol>
                                <li>Acudir personalmente a la Unidad de Igualdad de Género y Erradicación de la
                                    Violencia, a efecto de concluir el trámite de préstamo y entrega del libro.
                                </li>
                                <li>Informar a la Unidad de Igualdad de Género y Erradicación de la Violencia, cualquier
                                    desperfecto o incidente con el libro.
                                </li>
                                <li>No maltratar, doblar, subrayar, manchar, arrancar hojas o imágenes del libro.</li>
                                <li>Contemplar que el período de préstamo es por 30 días, en su caso, podrá realizar la
                                    renovación del período en caso de disponibilidad.
                                </li>

                            </ol>


                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Libro solicitado: </strong></label>
                                    {!! Form::text('libro[libro]', $libro->nombre, ['class' => 'form-control text-uppercase','id' => 'libro', 'name' => 'libro', 'readonly'=>true]) !!}
                                    {!! Form::hidden('libro[libro_id]', $libro->id, ['class' => 'form-control text-uppercase','id' => 'libro_id', 'name' => 'libro_id', 'readonly'=>true]) !!}
                                </div>
                            </div>
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Fecha de recolección del libro: </strong></label>
                                    {!! Form::date('libro[fecha_recoleccion]',null, ['class' => 'form-control text-uppercase','id' => 'fecha_recoleccion', 'name' => 'fecha_recoleccion', 'min' => $todayDate, 'required' =>true]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Hora de recolección: </strong></label>
                                    {!! Form::time('libro[hora_recoleccion]',null, ['class' => 'form-control text-uppercase','id' => 'hora_recoleccion', 'name' => 'hora_recoleccion', 'required' =>true]) !!}
                                </div>
                            </div>
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Fecha de entrega: </strong></label>
                                    {!! Form::date('libro[fecha_entrega_usuario]', null, ['class' => 'form-control text-uppercase','id' => 'fecha_entrega_usuario', 'name' => 'fecha_entrega_usuario', 'min' => $todayDate, 'required' =>true]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Número de contacto: </strong></label>
                                    {!! Form::text('libro[contacto]',null, ['class' => 'form-control text-uppercase','placeholder' => 'P. EJ. 7229458601', 'id' => 'contacto', 'name' => 'contacto','maxlength' =>'10', 'pattern' => "([0-9]{10})", 'required' =>true]) !!}
                                </div>
                            </div>
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Folio de gafete oficial: </strong></label>
                                    {!! Form::text('libro[gafete]', null, ['class' => 'form-control text-uppercase','id' => 'gafete','placeholder' => 'P. EJ. ', 'name' => 'gafete', 'required' =>true]) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Consulta <a href="https://legislativoedomex.gob.mx/documentos/avisosprivacidad/unidad-de-igualdad-de-genero-y-erradicacion-de-la-violencia.pdf" target="_blank" > aquí </a>el aviso de privacidad. </strong></label><br>
                                    <label class="validate"> <strong>Acepto el uso y termino de condiciones  </strong>
                                        <input class="with-gap" name="aviso" id="aviso" type="checkbox" value="1" required/>
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="bot" style="display: none;">
                            <div class="input-field col m12">
                                <center>
                                    <button class="waves-effect waves-dark btn btn-primary" type="submit" id="b1" style="background-color: #ec731e; border-radius: 10px;">
                                        Guardar
                                    </button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





