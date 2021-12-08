<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use App\Models\Solicitud;
use Facade\Ignition\SolutionProviders\DefaultDbNameSolutionProvider;
use http\Exception;
use Illuminate\Http\Request;

class SolicitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $Us = auth()->user()->servidorPublico;
        $registro = $request ->except('_token');
        $libro = Libros::find($registro['libro_id']);
        $stock =$libro['stock'];
        if ($stock >0){
            $stock = $stock -1;
            $lib['stock'] = $stock;
            $libro->update($lib);

            $fecha_actual = date("Y-m-d");
            $fecha_entrega_sistema = date("Y-m-d",strtotime($fecha_actual."+ 30 days"));
            $registro['solicitante'] = $Us->N_Usuario;
            $registro['fecha_entrega_sistema'] = $fecha_entrega_sistema;
            $libros = Solicitud::create($registro);
        }
        return redirect('libros');
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

    public function solicitar($id){
        $servidorP = auth()->user()->servidorPublico;
        $libro = Libros::find($id);
        return view('libros.create', compact('servidorP','libro'));
    }
}
