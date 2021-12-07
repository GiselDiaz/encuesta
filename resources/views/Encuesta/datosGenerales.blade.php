@extends('layout')
@section('title')
    GENERO
@endsection
@section('content')

    <div class="card-body">
        {!! Form::open(['route'=>'datosG.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => '']) !!}
        @include('Encuesta.fromDG')
        {!! Form::close() !!}
    </div>
@endsection


