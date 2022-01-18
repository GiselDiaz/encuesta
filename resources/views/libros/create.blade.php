@extends('layout')
@section('title')
    GENERO
@endsection
@section('content')
    <div class="card-body">
        {!! Form::open(['route'=>'solicitud.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => '']) !!}
        @include('libros.solicitud')
        {!! Form::close() !!}
    </div>
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.materialboxed');
            var instances = M.Materialbox.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function () {
            $('.materialboxed').materialbox();
        });


        $("#fecha_recoleccion").on("blur", function () {
            var day = new Date(elDate.value ).getUTCDay();
            alert("dia ".day)
            // Días 0-6, 0 es Domingo 6 es Sábado
            elDate.setCustomValidity(''); // limpiarlo para evitar pisar el fecha inválida
            if( day == 0 ){
                elDate.setCustomValidity('Domingos no disponibles, por favor seleccione otro día');
            } else {
                elDate.setCustomValidity('');
            }
            if(!elForm.checkValidity()) {elSubmit.click()};
        });
    </script>
@endpush


