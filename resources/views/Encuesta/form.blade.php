<div class="row">
    <div class="col s12">
        <div class="container">
            <div class="section">
                <div class="card">
                    <div class="card-content">
                        <h1>DIAGNÓSTICO DE IGUALDAD DE TRATO Y OPORTUNIDADES ENTRE MUJERES Y HOMBRES.</h1>

                        <span><strong>Instrucciones:</strong> El diagnóstico está conformado por siete secciones, por favor lea cuidadosamente cada una de las preguntas y elija el círculo que corresponda a su respuesta. </span>
                        <ul class="stepper horizontal" id="horizStepper">
                            <li class="step active">
                                <div class="step-title waves-effect tooltipped" data-tooltip="Ambiente de trabajo y discriminación"> Ambiente de trabajo y<br> discriminación</div>
                                <div class="step-content">
                                    <div class="row">
                                        <div class="input-field col m6 center-align" style="font-weight: bolder;">
                                            Pregunta
                                        </div>
                                        <div class="input-field col m1 center-align" style="font-weight: bolder;">
                                            Sí
                                        </div>
                                        <div class="input-field col m1 center-align" style="font-weight: bolder;">
                                            No
                                        </div>
                                        <div class="input-field col m2 center-align" style="font-weight: bolder;">
                                            Algunas veces
                                        </div>
                                        <div class="input-field col m2 center-align" style="font-weight: bolder;">
                                            Lo desconozco
                                        </div>
                                    </div>
                                    @php $i = 1; @endphp
                                    <div class="container">
                                        <div class="card">

                                            @foreach ($preguntas as $preg)

                                                <section class="row">
                                                    <div class="input-field col m6" style="font-weight: bolder;">
                                                        <p>{{ $preg->texto }}</p>
                                                    </div>
                                                    <div class="input-field col m1">
                                                        <center>
                                                            <label class="validate">
                                                                <input class="with-gap" name="{{$preg->id}}"
                                                                       id="{{$preg->id}}" type="radio" value="A"
                                                                       required/>
                                                                <span></span>
                                                            </label>
                                                        </center>
                                                    </div>
                                                    <div class="input-field col m1">
                                                        <center>
                                                            <label class="validate">
                                                                <input class="with-gap" name="{{$preg->id}}"
                                                                       id="{{$preg->id}}" type="radio" value="B"
                                                                       required/>
                                                                <span></span>
                                                            </label>
                                                        </center>
                                                    </div>
                                                    <div class="input-field col m2">
                                                        <center>
                                                            <label class="validate">
                                                                <input class="with-gap" name="{{$preg->id}}"
                                                                       id="{{$preg->id}}" type="radio" value="C"
                                                                       required/>
                                                                <span></span>
                                                            </label>
                                                        </center>
                                                    </div>
                                                    <div class="input-field col m2">
                                                        <center>
                                                            <label class="validate">
                                                                <input class="with-gap" name="{{$preg->id}}"
                                                                       id="{{$preg->id}}" type="radio" value="D"
                                                                       required/>
                                                                <span></span>
                                                            </label>
                                                        </center>
                                                    </div>
                                                </section>

                                                @if ($i ==9) @break  @endif
                                                @php $i ++ @endphp
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col m10 s12">
                                        </div>
                                        <div class="col m2 s12">
                                            <button class="waves-effect waves dark btn btn-primary next-step"
                                                    type="submit">Siguiente<i
                                                    class="material-icons right">arrow_forward</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="step">
                                <div class="step-title waves-effect tooltipped" data-tooltip="Condiciones de trabajo">Condiciones de trabajo</div>
                                <div class="step-content">
                                    <div class="row">
                                        <div class="input-field col m6  center-align" style="font-weight: bolder;">
                                            Pregunta
                                        </div>
                                        <div class="input-field col m1  center-align" style="font-weight: bolder;">
                                            Sí
                                        </div>
                                        <div class="input-field col m1  center-align" style="font-weight: bolder;">
                                            No
                                        </div>
                                        <div class="input-field col m2  center-align" style="font-weight: bolder;">
                                            Algunas veces
                                        </div>
                                        <div class="input-field col m2  center-align" style="font-weight: bolder;">
                                            Lo desconozco
                                        </div>
                                    </div>
                                    @php
                                        $i=1;
                                    @endphp


                                    <div class="container">
                                        <div class="card">
                                            @foreach ($preguntas as $preg  )
                                                @if ($i >= 10 )

                                                    <section class="row">
                                                        <div class="input-field col m6" style="font-weight: bolder;">
                                                            <p>{{ $preg->texto }}</p>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="A" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="B" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="C" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="D" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                    </section>

                                                @endif
                                                @if ($i==15)
                                                    @break

                                                @endif
                                                @php
                                                    $i ++
                                                @endphp
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col m10 s12">
                                        </div>
                                        <div class="col m2 s12">
                                            <button class="waves-effect waves dark btn btn-primary next-step"
                                                    type="submit">Siguiente<i
                                                    class="material-icons right">arrow_forward</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="step">
                                <div class="step-title waves-effect tooltipped" data-tooltip="Permanencia y promoción">Permanencia y prom...</div>
                                <div class="step-content">
                                    <div class="row">
                                        <div class="input-field col m6" style="font-weight: bolder;">
                                            <center>Pregunta</center>
                                        </div>
                                        <div class="input-field col m1" style="font-weight: bolder;">
                                            <center>Sí</center>
                                        </div>
                                        <div class="input-field col m1" style="font-weight: bolder;">
                                            <center>No</center>
                                        </div>
                                        <div class="input-field col m2" style="font-weight: bolder;">
                                            <center>Algunas veces</center>
                                        </div>
                                        <div class="input-field col m2" style="font-weight: bolder;">
                                            <center>Lo desconozco</center>
                                        </div>
                                    </div>
                                    @php
                                        $i=1;
                                    @endphp


                                    <div class="container">
                                        <div class="card">
                                            @foreach ($preguntas as $preg  )
                                                @if ($i >= 16 )

                                                    <section class="row">
                                                        <div class="input-field col m6" style="font-weight: bolder;">
                                                            <p>{{ $preg->texto }}</p>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="A" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="B" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="C" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="D" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                    </section>

                                                @endif
                                                @if ($i==21)
                                                    @break

                                                @endif
                                                @php
                                                    $i ++
                                                @endphp
                                            @endforeach

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col m10 s12">
                                        </div>
                                        <div class="col m2 s12">
                                            <button class="waves-effect waves dark btn btn-primary next-step"
                                                    type="submit">Siguiente<i
                                                    class="material-icons right">arrow_forward</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="step">
                                <div class="step-title waves-effect tooltipped" data-tooltip="Capacitación y formación">Capacitación y form...</div>
                                <div class="step-content">
                                    <div class="row">
                                        <div class="input-field col m6" style="font-weight: bolder;">
                                            <center>Pregunta</center>
                                        </div>
                                        <div class="input-field col m1" style="font-weight: bolder;">
                                            <center>Sí</center>
                                        </div>
                                        <div class="input-field col m1" style="font-weight: bolder;">
                                            <center>No</center>
                                        </div>
                                        <div class="input-field col m2" style="font-weight: bolder;">
                                            <center>Algunas veces</center>
                                        </div>
                                        <div class="input-field col m2" style="font-weight: bolder;">
                                            <center>Lo desconozco</center>
                                        </div>
                                    </div>
                                    @php
                                        $i=1;
                                    @endphp

                                    <div class="container">
                                        <div class="card">
                                            @foreach ($preguntas as $preg  )
                                                @if ($i >= 22 )

                                                    <section class="row">
                                                        <div class="input-field col m6" style="font-weight: bolder;">
                                                            <p>{{ $preg->texto }}</p>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="A" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="B" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="C" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="D" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                    </section>

                                                @endif
                                                @if ($i==27)
                                                    @break

                                                @endif
                                                @php
                                                    $i ++
                                                @endphp
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col m10 s12">
                                        </div>
                                        <div class="col m2 s12">
                                            <button class="waves-effect waves dark btn btn-primary next-step"
                                                    type="submit">Siguiente<i
                                                    class="material-icons right">arrow_forward</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="step">
                                <div class="step-title waves-effect tooltipped" data-tooltip="Corresponsabilidad entre la vida laboral, familiar y personal">Corresponsabilidad en...</div>
                                <div class="step-content">
                                    <div class="row">
                                        <div class="input-field col m6" style="font-weight: bolder;">
                                            <center>Pregunta</center>
                                        </div>
                                        <div class="input-field col m1" style="font-weight: bolder;">
                                            <center>Sí</center>
                                        </div>
                                        <div class="input-field col m1" style="font-weight: bolder;">
                                            <center>No</center>
                                        </div>
                                        <div class="input-field col m2" style="font-weight: bolder;">
                                            <center>Algunas veces</center>
                                        </div>
                                        <div class="input-field col m2" style="font-weight: bolder;">
                                            <center>Lo desconozco</center>
                                        </div>
                                    </div>
                                    @php
                                        $i=1;
                                    @endphp


                                    <div class="container">
                                        <div class="card">

                                            @foreach ($preguntas as $preg  )
                                                @if ($i >= 28 )

                                                    <section class="row">
                                                        <div class="input-field col m6" style="font-weight: bolder;">
                                                            <p>{{ $preg->texto }}</p>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="A" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="B" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="C" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="D" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                    </section>

                                                @endif
                                                @if ($i==35)
                                                    @break

                                                @endif
                                                @php
                                                    $i ++
                                                @endphp
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col m10 s12">
                                        </div>
                                        <div class="col m2 s12">
                                            <button class="waves-effect waves-dark btn btn-primary" type="submit">
                                                Guardar Registro
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>




                            {{-- <li class="step">
                                <div class="step-title waves-effect">Sección 6</div>
                                <div class="step-content">
                                    <div class="row">
                                        <div class="input-field col m6" style="font-weight: bolder;">
                                            <center>Pregunta</center>
                                        </div>
                                        <div class="input-field col m1" style="font-weight: bolder;">
                                            <center>Sí</center>
                                        </div>
                                        <div class="input-field col m1" style="font-weight: bolder;">
                                            <center>No</center>
                                        </div>
                                        <div class="input-field col m2" style="font-weight: bolder;">
                                            <center>Algunas veces</center>
                                        </div>
                                        <div class="input-field col m2" style="font-weight: bolder;">
                                            <center>Lo desconozco</center>
                                        </div>
                                    </div>
                                    @php
                                        $i=1;
                                    @endphp

                                    <div class="container">
                                        <div class="card">
                                            @foreach ($preguntas as $preg  )
                                                @if ($i >= 26 )

                                                    <section class="row">
                                                        <div class="input-field col m6" style="font-weight: bolder;">
                                                            <p>{{ $preg->texto }}</p>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="A" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="B" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="C" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="D" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                    </section>

                                                @endif
                                                @if ($i==30)
                                                    @break

                                                @endif
                                                @php
                                                    $i ++
                                                @endphp
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col m10 s12">
                                        </div>
                                        <div class="col m2 s12">
                                            <button class="waves-effect waves dark btn btn-primary next-step"
                                                    type="submit">Siguiente<i
                                                    class="material-icons right">arrow_forward</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}

                            {{-- <li class="step">
                                <div class="step-title waves-effect">Sección 7</div>
                                <div class="step-content">
                                    <div class="row">
                                        <div class="input-field col m6" style="font-weight: bolder;">
                                            <center>Pregunta</center>
                                        </div>
                                        <div class="input-field col m1" style="font-weight: bolder;">
                                            <center>Sí</center>
                                        </div>
                                        <div class="input-field col m1" style="font-weight: bolder;">
                                            <center>No</center>
                                        </div>
                                        <div class="input-field col m2" style="font-weight: bolder;">
                                            <center>Algunas veces</center>
                                        </div>
                                        <div class="input-field col m2" style="font-weight: bolder;">
                                            <center>Lo desconozco</center>
                                        </div>
                                    </div>
                                    @php
                                        $i=1;
                                    @endphp


                                    <div class="container">
                                        <div class="card">
                                            @foreach ($preguntas as $preg  )
                                                @if ($i >= 31 )

                                                    <section class="row">
                                                        <div class="input-field col m6">
                                                            <p>{{ $preg->texto }}</p>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="A" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="B" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="C" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}"
                                                                           id="{{$preg->id}}" type="radio"
                                                                           value="D" required/>
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                    </section>

                                                @endif
                                                @if ($i==35)
                                                    @break

                                                @endif
                                                @php
                                                    $i ++
                                                @endphp
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col m10 s12">
                                        </div>
                                        <div class="col m2 s12">
                                            <button class="waves-effect waves-dark btn btn-primary" type="submit">
                                                Guardar Registro
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}


                        </ul>
                    </div>
                </div>
            </div>
        </div>

        @push('scripts')
            <script type="text/javascript">
                $(document).ready(function () {
                    var stepperDiv = document.querySelector('.stepper');
                    console.log(stepperDiv);
                    var stepper = new MStepper(stepperDiv);
                });
            </script>
@endpush
