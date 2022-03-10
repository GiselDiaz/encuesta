@extends('layout')
@section('title')
    Mis Libros
@endsection
@section('content')
<style>
    .btn,
    .btn-large,
    .btn-small,
    .btn-flat {
        line-height: 34px;
        display: inline-block;
        height: 22px;
        padding: 0 2rem;
        height: 35px;
        padding: 0 .5rem !important;
        ext-transform: uppercase;
        border: none;
        border-radius: 2px;
        -webkit-tap-highlight-color: transparent;
    }

    td {
        font-size: .9rem !important;
    }

</style>


<div class="container">
    <div class="section">
        <div class="card">
            <div class="section section-data-tables">
                <div class="row">
                    <div class="col s12">
                        <div class="table-responsive-lg">
                            <h4 class="text-align center">Mis libros</h4>
                            <table id="page-length-option" class="display" cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr>
                                        <th><strong>Datos solicitante</strong></th>
                                        <th><strong>Titulo Libro</strong></th>

                                        <th><strong>Fechas</strong></th>
                                        <th><strong>Estatus</strong></th>
                                        <th><strong>Observaciones</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hist as $s)
                                    <tr align="center">
                                        <td class="text-center">
                                            <strong>Solicitante: </strong>
                                            {{$s->sp->Nombre}}
                                            <br>
                                            <strong>Gafete: </strong>
                                            {{$s->gafete}}
                                            <br>
                                            <strong>Contacto: </strong>
                                            {{$s->contacto}}
                                        </td>
                                        <td class="text-justify">
                                            {{$s->libros->nombre}}
                                        </td>
                                        <td class="text-center">
                                            <strong>Fecha recoleccion: </strong>
                                            {{$s->fecha_recoleccion}}
                                            <br>
                                            <strong>Hora Recolección: </strong>
                                            {{$s->hora_recoleccion}} hrs.
                                            <br>
                                            <strong>Fecha entrega: </strong>
                                            {{$s->fecha_entrega_usuario}}
                                        </td>
                                        <td class="text-center" >
                                            @if($s->status == '0')
                                            <p  style="color:gray;"> PENDIENTE </p>
                                            @elseif($s->status == '1')
                                            <p  style="color:green;">APROBADO </p>
                                            @elseif($s->status == '2')
                                            <p  style="color:red;">FINALIZADO </p>
                                            @endif
                                        </td>
                                        <td class="text-center" >
                                            {{$s->observaciones}}

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
    <script>

    </script>
@endpush
