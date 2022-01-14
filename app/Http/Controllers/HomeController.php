<?php

namespace App\Http\Controllers;

use App\Models\DatosGeneralesU;
use App\Models\Home;
use App\Models\Libros;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use App\Models\Respuestas;
use App\Models\Preguntas;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
//        $usuario = auth()->user();
//        $respuestas = DatosGeneralesU::where('rfc_usuario',$usuario->rfc)->get();
//        return view('home', compact('respuestas'));

        $libros = Libros::all();
        foreach ($libros as $libro){
            $solicitudes = Solicitud::where('status','!=','2')->where('libro_id', $libro->id)->first();
            if ($solicitudes){
                $libroStock = Libros::find($libro->id);
                if($libroStock->stock == 0) {
                    $libro['disponible'] = $solicitudes->fecha_entrega_sistema;
                }
            }
        }

        return view('libros.show', compact('libros'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
