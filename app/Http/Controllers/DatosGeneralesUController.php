<?php

namespace App\Http\Controllers;

use App\Models\Antiguedad;
use App\Models\DatosGeneralesU;
use App\Models\Discapacidad;
use App\Models\Edades;
use App\Models\EstadoCivil;
use App\Models\NivelPuesto;
use App\Models\Sexo;
use App\Models\TipoContrato;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class DatosGeneralesUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sexo = Arr::pluck(Sexo::all(), 'respuesta','id');
        $edades = Arr::pluck(Edades::all(), 'respuesta','id');
        $estadoC = Arr::pluck(EstadoCivil::all(), 'respuesta','id');
        $discapacidad = Arr::pluck(Discapacidad::all(), 'respuesta','id');
        $antiguedad = Arr::pluck(Antiguedad::all(), 'respuesta','id');
        $nivelPuesto = Arr::pluck(NivelPuesto::all(), 'respuesta','id');
        $tipoContrato = Arr::pluck(TipoContrato::all(), 'respuesta','id');
        return view('Encuesta.datosGenerales', compact('sexo','edades','estadoC','discapacidad','antiguedad','nivelPuesto','tipoContrato'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servidorP = auth()->user();
        $reg = $request->except('_token');
        $reg['rfc_usuario'] = $servidorP->rfc;
        $encuesta = DatosGeneralesU::create($reg);

        $usuario = auth()->user();
        $respuestas = DatosGeneralesU::where('rfc_usuario',$usuario->rfc)->get();
        return view('home', compact('respuestas'));

      //  return route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
