@extends('layout')
@section('title')
    REPORTE INDIVIDUAL
@endsection
@section('content')

    <div class="container">
        <div class="section">
            <div class="card">
                <div class="section section-data-tables">
                    <div class="row">
                        <div class="col s12">

                            <h4 class="text-align center">Reporte individual</h4>
                            <table id="page-length-option" class="display">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>RFC</th>
                                        <th>Adscripción</th>
                                        <th>Estatus</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ( $usuarios as $usuario)
                                        <tr>
                                            <th>{{$usuario->Nombre}}</th>
                                            <th>{{$usuario->N_Usuario}}</th>
                                            <th><strong>Dependencia:</strong> {{$usuario->dependencia->Nombre}}<br>
                                                <strong>Dirección:</strong> {{$usuario->direccion->Nombre}}<br>
                                                <strong>Departamento:</strong> {{$usuario->departamento->nombre_completo}}<br>
                                            </th>
                                            <th> <a title="Ver" class="tooltipped" data-position="bottom"
                                                     data-tooltip="Ver"
                                                    href="{{ route('verReporte', [$usuario->id_Usuario]) }}" target="_blank">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                                         fill="currentColor" class="bi bi-card-checklist"
                                                         viewBox="0 0 16 16">
                                                        <path
                                                            d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                                        <path
                                                            d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                                                    </svg>
                                                </a>
                                            </th>
                                        </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
