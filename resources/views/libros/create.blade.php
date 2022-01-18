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

    </script>
@endpush


