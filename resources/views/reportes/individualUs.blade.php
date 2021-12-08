@extends('layout')
@section('title')
    GENERO
@endsection
@section('content')
    <div class="container">
        <div class="section">
            <div class="card">
                <div class="section section-data-tables">
                    <div class="row">
                        <div class="col s12">
                            @if(count($reporte))
                                <h3 class="card-title mb-0"><strong>DIAGNÓSTICO DE IGUALDAD DE TRATO Y OPORTUNIDADES ENTRE MUJERES Y HOMBRES</strong></h3>
                                <br>

                                <table id="striped" class="display">
                                    <thead>
                                    <tr style="background-color: rgba(198, 198, 198, .5);">
                                        <th  style="color: black; width: 50%;">Pregunta</th>
                                        <th  style="color: black;width: 10%;">Sí</th>
                                        <th  style="color: black;width: 10%;">No</th>
                                        <th  style="color: black;width: 10%;">Algunas veces</th>
                                        <th  style="color: black;width: 10%;">Desconozco</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ( $reporte as $report)
                                        <tr>
                                            <th><p style="text-align: left;">{{$report->preguntas->texto}}</p></th>
                                            <th align="justify">
                                                @if($report->respuesta == 'A')
                                                    1
                                                @else
                                                    0
                                                @endif
                                            </th>
                                            <th align="justify">
                                                @if($report->respuesta == 'B')
                                                    1
                                                @else
                                                    0
                                                @endif
                                            </th>
                                            <th>
                                                @if($report->respuesta == 'C')
                                                    1
                                                @else
                                                    0
                                                @endif
                                            </th>
                                            <th>
                                                @if($report->respuesta == 'D')
                                                    1
                                                @else
                                                    0
                                                @endif
                                            </th>
                                        </tr>
                                    @endforeach
                                    <tr style="background: #96124B;">
                                        <th style="color: white;"><strong>Total</strong></th>
                                        <th  style="color: white;"><strong>{{$si}}</strong></th>
                                        <th style="color: white;"><strong>{{$no}}</strong></th>
                                        <th style="color: white;"><strong>{{$alg}}</strong></th>
                                        <th style="color: white;"><strong>{{$desco}}</strong></th>
                                    </tr>
                                </tbody>
                            </table>
                                <input type="hidden" name="siV" id="siV" value="<?php echo $si; ?>">
                                <input type="hidden" name="noV" id="noV" value="<?php echo $no; ?>">
                                <input type="hidden" name="algV" id="algV" value="<?php echo $alg; ?>">
                                <input type="hidden" name="descoV" id="descoV" value="<?php echo $desco; ?>">

                            @else
                                <h4 class="text-align center">NO HAY REGISTRO AUN</h4>
                            @endif
                        </div>
                    </div>
                    <figure class="highcharts-figure">
                        <div id="container"></div>
                    </figure>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')
        <script>
            $(document).ready(function() {
                var si = document.getElementById("siV").value;
                let si1 =  parseInt(si);

                var no = document.getElementById("noV").value;
                let no1 =  parseInt(no);

                var alg = document.getElementById("algV").value;
                let alg1 =  parseInt(alg);

                var desco = document.getElementById("descoV").value;
                let desco1 =  parseInt(desco);

                 var chart = Highcharts.chart('container', {
                     chart: {
                         type: 'column'
                     },
                     title: {
                         text: 'DIAGNÓSTICO DE IGUALDAD DE TRATO Y OPORTUNIDADES ENTRE MUJERES Y HOMBRES'
                     },
                     subtitle: {
                         text: ''
                     },
                     accessibility: {
                         announceNewData: {
                             enabled: true
                         }
                     },
                     xAxis: {
                         type: 'category'
                     },
                     yAxis: {
                         title: {
                             text: 'Total'
                         }

                     },
                     legend: {
                         enabled: false
                     },
                     plotOptions: {
                         series: {
                             borderWidth: 0,
                             dataLabels: {
                                 enabled: true,
                                 format: '{point.y:.1f}%'
                             }
                         }
                     },

                     tooltip: {
                         headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                         pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                     },

                     series: [
                         {
                             name: "Respuestas",
                             colorByPoint: true,
                             data: [
                                 {
                                     name: "Sí",
                                     y: si1,
                                     drilldown: "Sí"
                                 },
                                 {
                                     name: "No",
                                     y: no1,
                                     drilldown: "No"
                                 },
                                 {
                                     name: "Algunas veces",
                                     y: alg1,
                                     drilldown: "Algunas veces"
                                 },
                                 {
                                     name: "Desconozco",
                                     y: desco1,
                                     drilldown: "Desconozco"
                                 }
                             ]
                         }
                     ],
                     drilldown: {

                     }
                 });
            })
    </script>
@endpush
