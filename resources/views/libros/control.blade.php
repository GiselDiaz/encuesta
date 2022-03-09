@extends('layout')
@section('title')
    Control
@endsection
@section('content')
    <div class="container">
        <div class="section">
            <div class="card">
                <div class="card-content">
                    <h4 class="text-align center">Estatus Solicitudes</h4>
                    <div class="row">
                        {{-- <div class="input-field col s4 " > --}}
                        <div class="form-group">
                            <div class="col s12">
                                <center>
                                    {!! Form::select('solicitud', ['0' => 'Nuevas solicitudes', '1' => 'Solicitudes Aceptadas','2' => 'Solicitudes Concluidas'], null, ['class' => 'form-control text-uppercase', 'name' => 'solicitud', 'id' => 'solicitud', 'placeholder' => 'Selecciona una opción']) !!}
                                </center>
                            </div>
                        </div>
                        {{-- </div> --}}
                        <div class="form-group">
                            <div class="col s12">
                                <center>
                                    <button class="btn btn-submit bg-primary waves-light " type="submit" name="action"
                                        onclick="buscar()" id="buscar">Buscar
                                        <i class="material-icons right">search</i>
                                    </button>

                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id='detalles' style="display: none;">HOLA</div>
@endsection
@push('scripts')
    <script>
        function buscar(){
            let solicitud = $("#solicitud").val();
            console.log(solicitud);
                $.ajax({
                    url: "{{ url('getcontrol') }}",
                    type: 'GET',
                    data: {solicitud
                    },
                    beforeSend: function () {
                        $("#detalles").html('Buscando Resultados...');
                    },
                    success: function (response) {
                        console.log('ci');
                        $("#detalles").show();
                        $("#detalles").html(response);
                        $('#page-length-option').DataTable().clear().draw();
                        $("#detalles").html(response);
                        $("#detalles").show();
                        $('#page-length-option').DataTable().draw();
                        $("#detalles").show();
                    }, error(error) {
                        alert('Falló con exito');
                    }
                });



        }
    </script>
@endpush
