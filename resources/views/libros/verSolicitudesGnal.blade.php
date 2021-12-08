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
                                <h4 class="text-align center">Prestamo de libros </h4>
                                <table id="page-length-option" class="display">
                                    <thead>
                                    <tr>
                                        <th>Solicitante </th>
                                        <th>Estatus</th>
                                        <th>Acción</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ( $solicitudes as $libro)
                                        <tr>
                                            <td>
                                                <p style="text-align: left;">{{$libro->sp->Nombre}}</p>
                                            </td>
                                            <td>
                                                @if($libro->status == 0)
                                                    <p>Pendiente por aprobar</p>
                                                @elseif($libro->status == 1)
                                                    <p>Pestado</p>
                                                @endif
                                            </td>
                                            <td>
                                                  @if($libro->status == 0)
                                                        <a title="aprobar" class="tooltipped" data-position="bottom" data-tooltip="Aprobar"
                                                           href="{{ route('aprobar', [$libro->id]) }}">
                                                            <i class="material-icons iconlegislatura">visibility</i>
                                                        </a>
                                                @elseif($libro->status == 1)
                                                        <a title="ver" class="tooltipped" data-position="bottom" data-tooltip="Ver"
                                                           href="{{ route('aprobar', [$libro->id])}}">
                                                            <i class="material-icons iconlegislatura">visibility</i>
                                                        </a>
                                                        <a  title="PDF" data-position="bottom" data-tooltip="PDF"
                                                        href="{{ route('pdf', [$libro->id])}}" target="_blank" class=" tooltipped ">
                                                         <i class="material-icons iconlegislatura">picture_as_pdf</i>
                                                     </a>
                                                @endif
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
                    // $(".loader").hide();

                },
                error: function(blob) {
                    console.log(blob);
                }
            })

        }
    </script>
@endpush

