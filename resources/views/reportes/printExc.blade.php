
        <h4>{{$ubicacion->Nombre}}</h4>
        @foreach ($preguntas as $pregunta)
            <table >

                <thead>
                    <tr>
                        <th >{{ $pregunta->texto }}</th>
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
        @endforeach



