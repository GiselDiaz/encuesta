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
                        <h4 align="center">{{$ubicacion->Nombre}}</h4>
                        @foreach ($preguntas as $pregunta)
                            <table class="striped" style="border:1px solid;">

                                <thead>
                                    <tr>
                                        <th style="width: 50%;">{{ $pregunta->texto }}</th>
                                        <th>Sí</th>
                                        <th>No</th>
                                        <th>Algunas veces</th>
                                        <th>Desconozo</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Total</td>

                                        <td>
                                            @foreach ($sumaA as $key => $value)
                                                @if ($key == $pregunta->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>



                                        <td>
                                            @foreach ($sumaB as $key => $value)
                                                @if ($key == $pregunta->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>



                                        <td>
                                            @foreach ($sumaC as $key => $value)
                                                @if ($key == $pregunta->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>


                                        <td>

                                            @foreach ($sumaD as $key => $value)
                                                @if ($key == $pregunta->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>

                                    </tr>

                                </tbody>
                            </table>
                            <figure class="highcharts-figure">
                                <div id="containerChart"></div>
                            </figure>
                        @endforeach
                        <div class="card-body">
                            <div class="container">
                                <br>

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
        function searchDep(){
            var dep = $("#dependencia_id").val();
            console.log(dep);
            $.ajax({
                type: 'GET',
                url :   "{{ url('getDep') }}"+"/" + dep,
                beforeSend: function() {
                },
                success:  function (response) {
                    $("#containerChart").show();
                    Highcharts.chart('containerChart', {
                        chart: {
                            type: 'bar'
                        },
                        title: {
                            text: 'Gráfica por Dependencia'
                        },
                        xAxis: {
                            categories: ['Secretaría de Asuntos Parlamentarios', 'Órgano Superior de Fiscalización', 'Secretaría de Administración y finanzas', 'Dirección General de Comunicación Social', 'Contraloría', 'Instituto de Estudios Legislativos', 'Unidad de Información', 'Legislatura']
                        },
                        yAxis: {
                            min: 0,
                            title: {
                            text: ''
                            }
                        },
                        legend: {
                            reversed: true
                        },
                        plotOptions: {
                            series: {
                            stacking: 'normal'
                            }
                        },
                        series: [{
                            name: 'Desconozco',
                            data: [1, 1, 1, 1, 1, 1, 1, 1]
                        }, {
                            name: 'Algunas Veces',
                            data: [1, 1, 1, 1, 1, 1, 1, 1]
                        }, {
                            name: 'No',
                            data: [3, 4, 4, 2, 5, 4, 7, 2]
                        }, {
                            name: 'Sí',
                            data: [3, 4, 4, 2, 5, 4, 7, 2]
                        }]
                        });
                },error(){
                    alert('error');
                }
            });
        }
        
    </script>
@endpush