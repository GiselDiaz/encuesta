
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

                                    <label class="control-label"><strong>Hora de recolección: </strong></label>
                                    {!! Form::time('libro[hora_recoleccion]',null, ['class' => 'form-control timepicker','id' => 'hora_recoleccion', 'name' => 'hora_recoleccion', 'required' =>true]) !!}

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Fecha de recolección: </strong></label>
                                    {!! Form::text('libro[fecha_recoleccion]',null, ['class' => 'form-control','id' => 'fecha_recoleccion', 'name' => 'fecha_recoleccion', 'min' => $todayDate, 'required' =>true]) !!}

                                </div>
                            </div>
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Fecha de entrega: </strong></label>
                                    {!! Form::text('libro[fecha_entrega_usuario]', null, ['class' => 'form-control text-uppercase','id' => 'fecha_entrega_usuario', 'name' => 'fecha_entrega_usuario', 'min' => $todayDate, 'required' =>true]) !!}
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
                                    <button class="waves-effect waves-dark btn btn-primary" onclick="enviarData()" type="submit" id="b1" style="background-color: #ec731e; border-radius: 10px;">
                                        Guardar
                                    </button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>





                <!-- Modal 111111111111111111 -->
                <div id="myModal" class="modal modal-fixed-footer">
                  <div class="modal-content">
                    {{-- <h4></h4> --}}
                    <object data="https://legislativoedomex.gob.mx/documentos/avisosprivacidad/unidad-de-igualdad-de-genero-y-erradicacion-de-la-violencia.pdf" type="application/pdf" width="100%" height="800px"> </object>
                  </div>
                  <div class="modal-footer">
                    <a onclick="cerrarMod1()" class=" waves-effect waves-green btn-flat">Aceptar</a>
                  </div>
                </div>


                    <!-- Modal 222222222222222 -->
                    <div id="myModal2" class="modal modal-fixed-footer">
                        <div class="modal-content">
                            <h2>Condiciones de Préstamo</h2>
                            <p><strong style=" font-size: 20px; color: #96124B;">Me comprometo a:</strong></p>
                            <br>

                            <p><strong style=" font-size: 20px; color: #000; text-align: justify;">1. No maltratar, doblar, subrayar, manchar, arrancar hojas o
                            imágenes del libro.</strong></p>
                            <br>
                            <p><strong style=" font-size: 20px; color: #000; text-align: justify;">2. Contemplar que el período de préstamo es por 30 días, en su caso,
                            podrá realizar la renovación del período en caso de disponibilidad.</strong></p>

                            <br>
                            <p><strong style=" font-size: 20px; color: #000; text-align: justify;">3. Informar a la Unidad de Igualdad de Género y Erradicación de la
                            Violencia, cualquier desperfecto o incidente con el libro.</strong></p>
                            <br>
                            <p><strong style=" font-size: 20px; color: #000; text-align: justify;">4. Devolver el ejemplar en la fecha señalada.</strong></p>

                            <br>
                            <p><strong style=" font-size: 20px; color: #000; text-align: justify;">5. Respetar las condiciones de préstamo.</strong></p>

                        </div>
                        <div class="modal-footer">
                          <a onclick="cerrarMod2()" class=" waves-effect waves-green btn-flat">Aceptar</a>
                        </div>
                      </div>



            </div>
        </div>
    </div>
</div>



@push('scripts')
<script src="http://momentjs.com/downloads/moment.min.js"></script>
<script type="text/javascript">

  $(document).on('change', '#fecha_entrega_usuario', function(e) {
        e.preventDefault();
        let fecha_recoleccion = moment($("#fecha_recoleccion").val());
        let fecha_entrega_usuario = moment($("#fecha_entrega_usuario").val());
        let dias = (fecha_entrega_usuario.diff(fecha_recoleccion, 'days'));
        if(dias >=31){
            swal({
                    title: "ATENCIÓN ",
                    text: 'LA FECHA DE ENTREGA NO DEBE SER MAYOR A 30 DÍAS',
                    icon: 'warning',
                    dangerMode: true,
                    buttons: {
                        accept: 'ACEPTAR'
                    }
                }).then(function(willDelete) {
                    if (willDelete) {
                        return false;
                    } else {
                        return false;

                    }
                });
        }

    });



    function enviarData(){
        let libro_id = $("#libro_id").val();
        let libro = $("#libro").val();
        let hora_recoleccion = $("#hora_recoleccion").val();
        let fecha_recoleccion = $("#fecha_recoleccion").val();
        let fecha_entrega_usuario = $("#fecha_entrega_usuario").val();
        let contacto = $("#contacto").val();
        let gafete = $("#gafete").val();
        if(hora_recoleccion == '' || fecha_recoleccion == '' || fecha_entrega_usuario == '' || contacto == '' || gafete == '' ){
            swal({
                    title: "ATENCIÓN ",
                    text: 'DEBE LLENAR TODOS LOS DATOS',
                    icon: 'warning',
                    dangerMode: true,
                    buttons: {
                        // cancel: 'CANCELAR',
                        accept: 'ACEPTAR'
                    }
                }).then(function(willDelete) {
                    if (willDelete) {
                        return false;
                    } else {
                        return false;

                    }
                });
        }
                swal({
                    title: "Atención, verifique que los datos proporcionados sean correctos: ",
                    text: 'Nombre del Libro: ' + libro + '\n' + '\n' +
                    'Hora de recolección: ' + hora_recoleccion + '\n' + '\n' +
                    'Fecha de recolección: ' + fecha_recoleccion + '\n' + '\n' +
                    'Fecha de entrega: ' + fecha_entrega_usuario + '\n' + '\n' +
                    'Número de contato: ' + contacto + '\n' + '\n' +
                    'Folio de gafete oficial: ' + gafete + '\n' ,
                    icon: 'warning',
                    dangerMode: true,
                    buttons: {
                        cancel: 'CANCELAR',
                        accept: 'ACEPTAR'
                    }
                }).then(function(willDelete) {
                    if (willDelete) {
                        $.ajax({
                            url: "{{ url('saveDataSolicitud') }}",
                            type: 'GET',
                            data: {libro_id,hora_recoleccion,fecha_recoleccion,fecha_entrega_usuario,contacto,gafete
                            },
                            xhrFields: {
                                responseType: 'blob'
                            },
                            beforeSend: function () {
                                swal({
                                title: "ATENCIÓN ",
                                text: 'Espere un momento, se esta descargando su formato electrónico de préstamo...',
                                icon: 'success',
                                dangerMode: true,
                                // buttons: {
                                // accept: 'ACEPTAR'
                                // }
                                }).then(function(willDelete) {
                                if (willDelete) {
                                return false;
                                } else {
                                return false;

                                }
                                });

                            },
                            success: function (response) {
                                var blob = new Blob([response]);
                                var link = document.createElement('a');
                                link.href = window.URL.createObjectURL(blob);
                                link.download = "prestamo.pdf";
                                link.click();
                                window.location.href = window.location.origin +'/home';
                            }, error(error) {

                            }
                        });
                    } else {
                    }
                });
    }


    function cerrarMod1(){
        $("#myModal").modal('close');
        $( "#aviso" ).prop( "checked", true );
    }

    function cerrarMod2(){
        $("#myModal2").modal('close');
        $( "#terminos" ).prop( "checked", true );
        let check1 = $("#aviso").val();
        let check2 = $("#terminos").val();
        if(check1 == 1 && check2 == 1){
            document.getElementById("bot").style= "display: block";
        }
    }


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
    });


    $(document).ready(function () {
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

    $(document).ready(function(){
        $('#myModal').modal();
        $('#myModal2').modal();
    });

    $(document).on('click', '#aviso', function(e) {
        e.preventDefault();
        $("#myModal").modal('open');
    });

    $(document).on('click', '#terminos', function(e) {
        e.preventDefault();
        $("#myModal2").modal('open');
    });


    $(document).on('change', '#hora_recoleccion', function(e) {
        e.preventDefault();
        let hora = $("#hora_recoleccion").val();
        var cadena2 = hora.slice(0, 2);

        if(hora >= '09:00' && hora <= '18:00'){
        }else{
            swal({
                    title: "ATENCIÓN",
                    text: "Seleccione un horario válido de 9:00 am a 18:00 pm",
                    icon: 'warning',
                    dangerMode: true,
                    buttons: {
                        accept: 'ACEPTAR'
                    }
                }).then(function(willDelete) {
                    if (willDelete) {
                        $("#hora_recoleccion").val('');
                        return false;

                    } else {
                        return false;
                    }
                });
        }
    });
</script>
@endpush

