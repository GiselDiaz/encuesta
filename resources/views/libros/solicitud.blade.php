
<div class="container">
    <div class="section">

        <div class="row"  style="background-color: rgba(198, 198, 198, .5);">
            <div class="row">
                <div class="col s12">
                    <div class="card-content">
                        <center>
                            <img style="width: 90%; height: 50%;" src="{{ asset('genero/images/logo/saf_espacio.png') }}">
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
{{--                            <h1>Formato de préstamo de libro(s)</h1>--}}

{{--                            La <strong>persona servidora pública solicitante</strong> deberá:--}}
{{--                            <ol>--}}
{{--                                <li>Acudir personalmente a la Unidad de Igualdad de Género y Erradicación de la--}}
{{--                                    Violencia, a efecto de concluir el trámite de préstamo y entrega del libro.--}}
{{--                                </li>--}}
{{--                                <li>Informar a la Unidad de Igualdad de Género y Erradicación de la Violencia, cualquier--}}
{{--                                    desperfecto o incidente con el libro.--}}
{{--                                </li>--}}
{{--                                <li>No maltratar, doblar, subrayar, manchar, arrancar hojas o imágenes del libro.</li>--}}
{{--                                <li>Contemplar que el período de préstamo es por 30 días, en su caso, podrá realizar la--}}
{{--                                    renovación del período en caso de disponibilidad.--}}
{{--                                </li>--}}
{{--                                <li>Revise que los datos capturados sean correctos haga clic en Guardar.</li>--}}
{{--                                <li>Descargue, imprima y firme el formato.</li>--}}
{{--                                <li>Debe dirigirse al icono ubicado en el margen superior y haga clic para cerrar sesión.</li>--}}
{{--                                <li>Presentar el formato firmado en la Unidad de Igualdad de Género  y Erradicación de la Violencia paa concluir el trámite de préstamo.</li>--}}
{{--                            </ol>--}}


                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Libro solicitado: </strong></label>
                                    {!! Form::text('libro[libro]', $libro->nombre, ['class' => 'form-control text-uppercase','id' => 'libro', 'name' => 'libro', 'readonly'=>true]) !!}
                                    {!! Form::hidden('libro[libro_id]', $libro->id, ['class' => 'form-control text-uppercase','id' => 'libro_id', 'name' => 'libro_id', 'readonly'=>true]) !!}
                                </div>
                            </div>
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Fecha de recolección: </strong></label>
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
                            <div class="input-field col m10">
                                <div class="form-group">
                                    <label>Llene el formato electrónico de préstamo, consulte el aviso de privacidad <a href="https://legislativoedomex.gob.mx/documentos/avisosprivacidad/unidad-de-igualdad-de-genero-y-erradicacion-de-la-violencia.pdf" target="_blank" > aquí </a> y revise las considiciones de préstamo. </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="validate">
                                    <input class="with-gap" name="aviso" id="aviso" type="checkbox" value="1" required/> <span></span>
                                        <strong>He leído el aviso de privacidad </strong>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="validate">
                                    <input class="with-gap1" name="terminos" id="terminos" type="checkbox" value="1" required/> <span></span>
                                        <strong>Acepto el uso y termino de condiciones  </strong>
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



@push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('#fecha_recoleccion').datepicker({
            minDate  : new Date(),
            format: "yyyy-mm-dd",
            disableWeekends:true,
            i18n: {
                months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Set", "Oct", "Nov", "Dic"],
                weekdays: ["Domingo","Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
                weekdaysShort: ["Dom","Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
                weekdaysAbbrev: ["D","L", "M", "M", "J", "V", "S"]
            }
        });

        $('#fecha_entrega_usuario').datepicker({
            minDate  : new Date(),
            format: "yyyy-mm-dd",
            disableWeekends:true,
            i18n: {
                months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Set", "Oct", "Nov", "Dic"],
                weekdays: ["Domingo","Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
                weekdaysShort: ["Dom","Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
                weekdaysAbbrev: ["D","L", "M", "M", "J", "V", "S"]
            }
        });
    });
</script>
@endpush

