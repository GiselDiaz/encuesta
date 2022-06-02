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
                            <h4 class="text-align center">Resultados de busqueda</h4>
                            <table id="page-length-option" class="display" cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr>
                                        <th><strong>Datos solicitante</strong></th>
                                        <th><strong>Titulo Libro</strong></th>
                                        <th><strong>Stock</strong></th>
                                        <th><strong>Fechas</strong></th>
                                        <th><strong>Estatus</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sol as $s)
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
                                            {{$s->libros->stock}}/2
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
                                            <strong>Hora entrega: </strong>
                                            {{$s->hora_entrega_usuario}}
                                        </td>

                                        <td class="text-center">
                                            <?php
                                                $hoy = \Carbon\Carbon::now()->format('Y-m-d');
                                                $f1 = \Carbon\Carbon::createFromFormat('Y-m-d', $hoy);
                                                $f2 = \Carbon\Carbon::createFromFormat('Y-m-d', $s->fecha_entrega_usuario);
                                                $diferencia_en_dias = $f1->diffInDays($f2);

                                                if($s->status == '0'){
                                                    echo '<i class="material-icons" style="color:gray; font-size: 40px">fiber_manual_record</i>';
                                                }elseif($hoy >= $f2 || $s->status == '2'){
                                                    echo '<i class="material-icons" style="color:red; font-size: 40px">fiber_manual_record</i>';
                                                }else{
                                                    echo '<i class="material-icons" style="color:green; font-size: 40px">fiber_manual_record</i>';
                                                }
                                            ?>
                                            @if($s->status == '0' || $s->status == '1' )
{{--                                                <a title="ver" class="tooltipped" data-position="bottom" data-tooltip="ver"--}}
{{--                                                href="{{ route('aprobar', [$s->id])}}">--}}
{{--                                                <i class="material-icons iconlegislatura">visibility</i>--}}
{{--                                                </a>--}}
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
