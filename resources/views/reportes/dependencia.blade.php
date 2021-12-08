@extends('layout')
@section('title')
    REPORTE DEPENDENCIA
@endsection
@section('content')
<div class="card-body">
    <div class="container">
        <div class="section">
            <div class="height-30vh">

            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="section">
        <div class="card">
            <div class="section section-data-tables">

                <div class="row">
                    <div class="col s12">
                        <h4 align="center">Reporte Dependencia</h4><br>
                            {!! Form::open(['route'=>'pdf.dependencia', 'method'=>'POST','files' => true, 'role' => 'form','id' => 'frmReporteDep']) !!}
                                @csrf
                                <div class="input-field col s4">
                                    {!! Form::select('dependencia', $Dependencia, null, ['class' => 'select2 browser-default','placeholder' => 'SELECCIONA UNA OPCIÓN ', 'required', 'id' => 'dependencia_id']) !!}

                                    <label>Dependencia:</label>

                                </div>

                                <div class="input-field col s4">
                                    {!! Form::select('direccion', $Direccion, null, ['class' => 'select2 browser-default','placeholder' => 'SELECCIONA UNA OPCIÓN ', 'id' => 'direccion_id', 'disabled' => 'true']) !!}

                                    <label>Dirección:</label>

                                </div>

                                <div class="input-field col s4">
                                    {!! Form::select('departamento', $Departamento, null, ['class' => 'select2 browser-default','placeholder' => 'SELECCIONA UNA OPCIÓN ', 'id' => 'departamento_id', 'disabled' => 'true']) !!}

                                    <label>Departamento:</label>

                                </div>

                                <div class="card-body">
                                    <div class="container">
                                        <br>
                                        <center>
                                            <strong><br><br><button  class="btn btn-sm btn-secondary" type="submit"
                                                name="action" formtarget="_blank"
                                                    style="background-color:rgb(150,0,72);" ><i
                                                        class="material-icons left">archive</i>PDF</button></strong>
                                        </center>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push("scripts")
    <script type="text/javascript">
        $(document).ready(function () {

            $('#dependencia_id').on('change', function() {

                $.get('{{ asset("/getdireccion/") }}/' + $(this).val(), function(data) {
                    $("#direccion_id").find('option').remove();
                    $("#direccion_id").append('<option value="">SELECCIONE UNA OPCIÓN </option>');
                    $(data).each(function(i, v) { // indice, valor
                        $("#direccion_id").append('<option value="' + v.id_Direccion + '">' + v.Nombre + '</option>');
                    });
                    $("#direccion_id").prop('disabled', false);
                });

            });


            $('#direccion_id').on('change', function() {

               $.get('{{ asset("/getdepartamento/") }}/' + $(this).val(), function(data) {
                   $("#departamento_id").find('option').remove();
                   $("#departamento_id").append('<option value="">SELECCIONE UNA OPCIÓN </option>');
                   $(data).each(function(i, v) { // indice, valor
                       $("#departamento_id").append('<option value="' + v.id_Departamento + '">' + v.nombre_completo + '</option>');
                   });
               });
               $("#departamento_id").prop('disabled', false);

           });


        });
    </script>
@endpush
