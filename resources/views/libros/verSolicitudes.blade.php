@extends('layout')
@section('title')
    GENERO
@endsection
@section('content')
    <div class="card-body">
        <div class="container">
            <div class="section">
                <div class="card">
                    <div class="section section-data-tables">
                        <div class="row">
                            <div class="col s12">
                                <h4 class="text-align center">Préstamo de libro(s)</h4>
                                <p>Espacio cultural diseñado para las personas servidoras públicas del Poder Legislativo, cuyo propósito es promover y fomentar la práctica de la lectura con bibliografía especializada sobre diversos estudios y compendios en materia de género, realizados por el Consejo Nacional para Prevenir la Discriminación CONAPRED.</p>
                                <table id="page-length-option" class="display">
                                    <thead>
                                    <tr>
                                        <th style="width: 60%">Título</th>
                                        <th>Estatus</th>
                                        <th>Libros Disponibles</th>
                                        <th>Acción</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $libros as $libro)
                                            <tr>
                                                <td style="width: 60%">
                                                    <p style="text-align: left;">{{$libro->nombre}}</p>
                                                </td>
                                                <td>
                                                    @if(isset($libro->status))
                                                    <p>{{$libro->status}}</p>
                                                    @else
                                                        <p>Diponible</p>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{$libro->stock}}
                                                </td>
                                                <td>
                                                    <a title="ver" class="tooltipped" data-position="bottom" data-tooltip="ver"
                                                       href="{{ route('verLibrosAprobar', [$libro->id]) }}">
                                                        <i class="material-icons iconlegislatura">visibility</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script type="text/javascript">
        function pdf(id) {
            let idLi = id;
            console.log(id);
            $.ajax({
                url: "{{ url('pdf') }}",
                type: 'GET',
                data: {
                    id
                    },
                xhrFields: {
                    responseType: 'blob'
                },
                beforeSend: function() {
                    // $(".loader").show()
                },
                success: function(response) {
                    var blob = new Blob([response]);
                    console.log(blob);
                    var link = document.createElement('a');
                    link.href = window.URL.createObjectURL(blob);
                    link.download = "formatoPrestamo.pdf";
                    link.click();
                    console.log('succ');
                    // $(".loader").hide();

                },
                error: function(blob) {
                    console.log(blob);
                }
            })

        }
</script>
@endpush

