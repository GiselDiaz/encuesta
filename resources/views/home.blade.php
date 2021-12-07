@extends('layout')
@section('title')
    INICIO
@endsection
@section('content')

    <div id="contenedor">

        <div class="row">
            <div class="input-field col m2"></div>
            <div class="input-field col m8">
                <div class="card-alert card">
                    <div class="card-content">
                        <h1>DIAGNÓSTICO DE IGUALDAD DE TRATO Y OPORTUNIDADES ENTRE MUJERES Y HOMBRES.</h1>

                        <p align="justify" style="font-size: 18px;"><strong>Objetivo</strong></p><br>
                        <p align="justify" style="color: black;">El presente diagnóstico tiene como objetivo visibilizar situaciones de desigualdad individual y colectiva entre mujeres y hombres al interior del Poder Legislativo,
                            con el propósito de establecer buenas prácticas que promuevan una cultura institucional que integre como principio básico la igualdad y se reduzcan las brechas de inequidad y discriminación en
                            su espacio laboral.</p>
                        <br>


                        <p align="justify" style="font-size: 18px;"><strong>Instrucciones de llenado</strong></p>
                        <p align="justify" style="color: black;">El diagnóstico está conformado por siete secciones, por favor lea cuidadosamente cada una de las preguntas y elija el círculo que corresponda a su respuesta. <strong> <br>
                        <a href="http://legislativoedomex.gob.mx/documentos/avisosprivacidad/unidad-de-igualdad-de-genero-y-erradicacion-de-la-violencia.pdf" target="_blank" style="color: #8A084B !important; font-weight: 600;">Consulte nuestro aviso de privacidad aquí.</a></strong></p><br>

                    </div>
                    @if(count($respuestas))
                        <div class="card-action orange lighten-4">
                            <strong class>ENCUESTA REALIZADA</strong>
                        </div>
                    @else
                        <div class="card-action orange lighten-4">
                            <a href="{{route('datosG.index')}}" class="black-text" style="font-weight: bolder;">Sí, acepto</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    @if(session('correcto') == 'ok')
        <script>
            swal({
                title: "GRACIAS POR PARTICIPAR",
                text: "ENVIADO CON ÉXITO",
                icon: 'success',
                dangerMode: true,
                buttons: {
                    accept: 'ACEPTAR'
                }
            }).then(function (willDelete) {
                if (willDelete) {
                    location.reload();

                } else {
                    location.reload();
                }
            });
        </script>
    @endif

@endpush
