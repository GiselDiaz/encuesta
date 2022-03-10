@extends('layout')
@section('title')
    GENERO
@endsection
@section('content')
    <div class="card-body">
        <div class="container">
            <div class="section">
                <div class="card">
                    <div class="section section-data-tables">
                        <div class="row">
                            <div class="col s12">
                                <h4 class="text-align center">Aprobación de préstamo</h4>
                            </div>
                        </div>
                        {!! Form::open(['route' => ['libros.update', $solicitud->id], 'method' => 'PUT', 'role' => 'form', 'id' => 'frmSolitud']) !!}

                        <div class="row">
                            <div class="input-field col m4">
                                <div class="form-group">
                                    <label class="control-label"><strong>Libro solicitado: </strong></label>
                                    {!! Form::text('libro[libro]', $solicitud->libros->nombre, ['class' => 'form-control text-uppercase','id' => 'libro', 'name' => 'libro', 'readonly'=>true]) !!}
                                </div>
                            </div>
                            <div class="input-field col m4">
                                <div class="form-group">
                                    <label class="control-label"><strong>Solicitante: </strong></label>
                                    {!! Form::text('libro[libro]', $solicitud->sp->Nombre, ['class' => 'form-control text-uppercase','id' => 'libro', 'name' => 'libro', 'readonly'=>true]) !!}
                                </div>
                            </div>
                            <div class="input-field col m4">
                                <div class="form-group">
                                    <label class="control-label"><strong>Fecha de solicitud: </strong></label>
                                    {!! Form::text('libro[libro]', $solicitud->created_at, ['class' => 'form-control text-uppercase','id' => 'libro', 'name' => 'libro', 'readonly'=>true]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m4">
                                <div class="form-group">
                                    <label class="control-label"><strong>Fecha de recolección: </strong></label>
                                    {!! Form::text('libro[libro]', $solicitud->fecha_recoleccion, ['class' => 'form-control text-uppercase','id' => 'libro', 'name' => 'libro', 'readonly'=>true]) !!}
                                </div>
                            </div>
                            <div class="input-field col m4">
                                <div class="form-group">
                                    <label class="control-label"><strong>Hora de recolección: </strong></label>
                                    {!! Form::text('libro[libro]', $solicitud->hora_recoleccion, ['class' => 'form-control text-uppercase','id' => 'libro', 'name' => 'libro', 'readonly'=>true]) !!}
                                </div>
                            </div>
                            <div class="input-field col m4">
                                <div class="form-group">
                                    <label class="control-label"><strong>Fecha de entrega del libro seleccionada por el solicitante: </strong></label>
                                    {!! Form::text('libro[libro]', $solicitud->fecha_entrega_usuario, ['class' => 'form-control text-uppercase','id' => 'libro', 'name' => 'libro', 'readonly'=>true]) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Número de contacto persona servidora pública solicitante: </strong></label>
                                    {!! Form::text('libro[libro]', $solicitud->contacto, ['class' => 'form-control text-uppercase','id' => 'libro', 'name' => 'libro', 'readonly'=>true]) !!}
                                </div>
                            </div>
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Folio de gafete oficial:  </strong></label>
                                    {!! Form::text('libro[libro]', $solicitud->gafete, ['class' => 'form-control text-uppercase','id' => 'libro', 'name' => 'libro', 'readonly'=>true]) !!}
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="input-field col m4">
                                <div class="form-group">
                                    <label class="control-label"><strong>Fecha límite de entrega del libro asignada por sistema: </strong></label>
                                    {!! Form::text('libro[libro]', $solicitud->fecha_entrega_sistema, ['class' => 'form-control text-uppercase','id' => 'libro', 'name' => 'libro', 'readonly'=>true]) !!}
                                </div>
                            </div>
                            @if($solicitud->status == 0)
                                <div class="input-field col m8">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Aprobar: </strong></label>
                                        {!! Form::select('libro[aprobacion]', $validacion, [], ['class' => 'form-control text-uppercase','id' => 'aprobacion', 'name' => 'aprobacion', 'placeholder'=>'Selecciona una opción']) !!}
                                    </div>
                                </div>
                            @endif
                            @if($solicitud->status == 1)
                                <div class="input-field col m8">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Entregado: </strong></label>
                                        {!! Form::select('libro[entregado]', $validacion, [], ['class' => 'form-control text-uppercase','id' => 'entregado', 'name' => 'entregado', 'placeholder'=>'Selecciona una opción']) !!}
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="row">
                            @if($solicitud->status == 0)
                                <div class="input-field col m12">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Observaciones: </strong></label>
                                        {!! Form::text('libro[observaciones]', null, ['class' => 'form-control text-uppercase','id' => 'observaciones', 'name' => 'observaciones', 'placeholder'=>'P. Ej. La entrega del libro será en la oficina de la unidad de genero','required']) !!}
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="row">
                            <div class="input-field col m12">
                                <center>
                                    <button class="waves-effect waves-dark btn btn-primary" type="submit" id="b1" style="background-color: #ec731e; border-radius: 10px;">
                                        Guardar
                                    </button>
                                </center>
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


