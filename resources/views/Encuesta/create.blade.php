@extends('layout')
@section('title')
    GENERO
@endsection
@section('content')

    <div class="card-body">

        @if(count($respuestas))
        <div class="card-body">
            <div class="container">
                <br>
                <center>
                    <img class="collection-item avatar" src="{{ asset('genero/images/logo/warning.png')}}" width="25" height="25"  alt="name" class="circle">

                    <strong class>ENCUESTA REALIZADA</strong>
                    <br>
                    <br>

                </center>
            </div>
            <br>
        </div>
        @else

        {!! Form::open(['route'=>'encuesta.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => '']) !!}
        @include('Encuesta.form')
        {!! Form::close() !!}
        @endif

    </div>
@endsection


