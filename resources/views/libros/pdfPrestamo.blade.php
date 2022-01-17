<!DOCTYPE html>
<html>

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="content-type" content="text-html; charset=utf-8">
    <style type="text/css">
        p.titulos {
            font-size: 15px;

            text-align: center;
            margin-top: 20px;
        }

        p.subtitulo {
            font-size: 13px;

            text-align: center;
        }

        p.folio {
            font-size: 13px;

            text-align: right;
        }

        p.destinatario {
            font-size: 13px;

            text-align: left;
            margin-top: 20pt;
        }

        .center {
            text-align: center;
        }

        p.texto {
            font-size: 11px;

            text-align: justify;
        }

        td {
            margin-top: 50px;

            font-size: 11px;

            /* border: 1px solid #000000; */
        }

        .text-center {
            text-align: center;
        }

        .text-uppercase {
            text-transform: uppercase;
        }

        .danger {
            color: red;
        }

        .warning {
            color: yellow;
        }

        .success {
            color: green;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            font-size: 11px;
        }

        .th-h {
            text-align: center !important;
            font-size: 11px;
        }

        th {
            border: 1px solid #000000;
            text-align: center !important;
            padding: 8px;
            font-size: 10px;

        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        @page {
            margin: 0cm 0cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 0cm;
        }

        .center-img {
            text-align: center;
        }

        .header-img {
            width: 30%;
        }

        .footer-img {
            width: 80%;
        }

        body {
            margin: 80px 80px 75px 80px;
        }

        .firma {
            background-color: transparent !important;
            text-align: center;
            font-size: 10px;
        }

        .tabla2 {
            border: 1px solid #000000;
            font-size: 10px;
        }

        .tablita2 {
            font-size: 12px;
            justify;
            style="line-height:.5px;
padding-left: 20px;
        }

        @font-face {
            font-family: 'Helvetica';
            font-weight: normal;
            font-style: normal;
            font-variant: normal;
        }

        body {
            margin-top: 3.5cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
            font-size: 14px;
            font-family: 'Helvetica';
            font-style: normal;
            font-size: 7.7px;
        }

        h1 {
            font-size: 12px;
            font-weight: bold;
        }

        th {
            font-weight: bold;
            background-color: #d2d3d5;
        }

        h5 {
            font-size: 11px;
            font-weight: bold;
            text-align: justify;
        }

        .texta {
            font-weight: bold;
            text-align: justify;
            color: #960048;
            font-size: 8px;
        }


        span {
            font-size: 10px;
            font-weight: bold;
            text-align: justify;
            content: '\A' !important;
            white-space: pre !important;
        }


        header {
            position: fixed;
            top: .5cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
        }

        /* Define the footer rules */
        footer {
            position: fixed;
            bottom: 0cm;
            left: .5cm;
            right: 0cm;
            height: 2cm;
        }

        h1 {
            font-size: 12px;
            font-weight: bold;
        }

        th {
            font-weight: bold;
            background-color: #d2d3d5;
        }

        h5 {
            font-size: 11px;
            font-weight: bold;
            text-align: justify;
        }


        .texta {
            font-weight: bold;
            text-align: justify;
            color: #960048;
            font-size: 8px;
        }


        span {
            font-size: 10px;
            font-weight: bold;
            text-align: justify;
            content: '\A' !important;
            white-space: pre !important;
        }

        p {
            font-size: 10px;
            text-align: right;
        }

        .page_break {
            page-break-before: always;
        }

    </style>
</head>
<header>
    <br>
    <center>
        <div class="row">
            <img src="{{ asset('genero/images/logo/genero_header.png') }}" alt=" avatar" style="width: 100%;" />

        </div>

    </center>
</header>
<body>
        <div class="card-header">
            <h1 style="text-align: left; text-transform: capitalize;">
                <br><b>Formato de préstamo de libro(s)</b>
            </h1>
            <hr>
        </div>
        <h2 style="text-align: left; text-transform: capitalize; color:rgb(150,0,72);">
            <br><b>1.- Persona servidora pública solicitante </b>
        </h2>

        <table width="100%" border="1" cellpadding="4">
            <tbody>
                <tr>
                    <td align="left" width="100%">Nombre: <STRONG>{{$sp[0]->Nombre}}</STRONG></td>
                </tr>
                <tr>
                    <td align="left" width="100%">Dependencia: <strong>{{$depe->Nombre}} </strong> </td>
                </tr>
                <tr>
                    <td align="left" width="100%">Dirección: <strong> {{$dir->nombre_completo}}</strong> </td>
                </tr>
                <tr>
                    <td align="left" width="100%">Departamento: <strong> {{$departamento->nombre_completo}}</strong> </td>
                </tr>
                <tr>
                    <td align="left" width="100%">Número de contacto: <strong> {{$data->contacto}}</strong> </td>
                </tr>
                <tr>
                    <td align="left" width="100%">Folio de gafete oficial: <strong> {{$data->gafete}}</strong> </td>
                </tr>

            </tbody>
        </table>

        <h2 style="text-align: left; text-transform: capitalize; color:rgb(150,0,72);">
            <br><b>2.- Datos del libro </b>
        </h2>

        <table width="100%" border="1" cellpadding="4">
            <tbody>
                <tr>
                    <td align="left" width="100%">Título: <STRONG>{{$data->libros->nombre}}</STRONG>
                    </td>
                </tr>
                <tr>
                    <td align="left" width="100%">Número: <STRONG> UIGyEv-00{{$data->libros->id}}-0{{count($num)}}</STRONG>
                    </td>
                </tr>
                <tr>
                    <td align="left" width="100%">Fecha de préstamo: <strong> {{ \Carbon\Carbon::parse($data->created_at)->format('d-m-Y')}}</strong> </td>
                </tr>
                <tr>
                    <td align="left" width="100%">Fecha de devolución: <strong> {{ \Carbon\Carbon::parse($data->fecha_entrega_usuario)->format('d-m-Y')}}</strong> </td>
                </tr>
                <tr>
                    <td align="left" width="100%">Observaciones: <STRONG>{{$data->observaciones}}</STRONG></td>
                </tr>
            </tbody>
        </table>
        <br><br><br><br>
        <p style="text-align: left; text-transform: capitalize;"><strong >La Persona servidora p&uacute;blica solicitante deber&aacute;:</strong></p>
        <ul>
        <li style="text-align: justify; text-transform: capitalize;">Acudir personalmente a la Unidad de Igualdad de G&eacute;nero y Erradicaci&oacute;n de la Violencia, a efecto de realizar el tr&aacute;mite de pr&eacute;stamo y entrega del libro.</li>
        <li style="text-align: justify; text-transform: capitalize;">Informar a la Unidad de Igualdad de G&eacute;nero y Erradicaci&oacute;n de la Violencia, cualquier desperfecto o incidente con el libro.</li>
        <li style="text-align: justify; text-transform: capitalize;">No maltratar, doblar, subrayar, manchar, arrancar hojas o im&aacute;genes del libro.</li>
        <li style="text-align: justify; text-transform: capitalize;">Contemplar que el per&iacute;odo de pr&eacute;stamo es por 30 d&iacute;as, en su caso, podr&aacute; realizar la renovaci&oacute;n del per&iacute;odo en caso de disponibilidad.</li>
        </ul>
        <br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br>

            <table>

                <tr>
                    <td style="text-align:center">
                        <hr>
                    </td>
                    <td style="text-align:center">

                    </td>
                    <td style="text-align:center">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td WIDTH="150" class="firma">
                        <b>
                            Nombre y firma de lector(a)
                            <br>

                        </b>
                    </td>
                    <td class="firma"></td>
                    <td WIDTH="150" class="firma">
                        <b>
                            Nombre y firma de la Jefa(e) de la
                            Unidad de Igualdad de Género
                            y Erradicación de la Violencia
                            <br>
                        </b>
                    </td>
                </tr>
            </table>
    <br>
    <br>
    <br>

</body>
<footer>
    <center>
        <div class="row">
            <img src="{{ asset('genero/images/logo/membrete3.png') }}" alt=" avatar" style="width: 90%;" />
        </div>

    </center>
</footer>
</html>
