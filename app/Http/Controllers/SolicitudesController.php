<?php

namespace App\Http\Controllers;

use App\Mail\registroMailable;
use App\Mail\SalidaMailable;
use App\Models\Departamento;
use App\Models\Dependencia;
use App\Models\Direccion;
use App\Models\Libros;
use App\Models\ServidoresPublicosCentralizada;
use App\Models\Solicitud;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Facade\Ignition\SolutionProviders\DefaultDbNameSolutionProvider;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

     public function saveDataSolicitud(Request $request){
        $Us = auth()->user()->servidorPublico;
        $registro = $request ->except('_token');
        // dd($registro);
        //dd($registro);
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

            $data = Solicitud::create($registro);
            $sp =  ServidoresPublicosCentralizada::where('Estado',1)->where('N_Usuario', $Us->N_Usuario)->get();
            $depe=  Dependencia::where('id_Dependencia',$sp[0]->id_Dependencia)->first();
            $dir =  Direccion::where('id_Direccion',$sp[0]->id_Direccion)->first();
            $departamento =  Departamento::where('id_Departamento', $sp[0]->id_Departamento)->first();
            $num = Solicitud::where('status',1)->where('libro_id',$data->libro_id)->get();

            $unidad = ServidoresPublicosCentralizada::where('N_Usuario', 'MATD810802')->first();
            $solicitante =$sp[0]->Nombre;
            if (!empty($unidad)){
                if ($unidad->C_Electronico != ''){
                    $nombreJ = $unidad->Nombre;
                 //   dd($unidad);
                    Mail::to($unidad->C_Electronico)->send(new registroMailable($nombreJ, $solicitante));
                }
            }

            $pdf = PDF::loadView('libros.pdfPrestamo', compact('data','dir','departamento','sp','depe','num'));
            return $pdf->stream('dependencia.pdf');
        }else{
            $response[] = array(
                "existe"=>'no'
            );
            return json_encode($response);
        }

     }



    public function store(Request $request)
    {
        // $Us = auth()->user()->servidorPublico;
        // $registro = $request ->except('_token');
        // //dd($registro);
        // $libro = Libros::find($registro['libro_id']);
        // $stock =$libro['stock'];

        // if ($stock >0){
        //     $stock = $stock -1;
        //     $lib['stock'] = $stock;
        //     $libro->update($lib);

        //     $fecha_actual = date("Y-m-d");
        //     $fecha_entrega_sistema = date("Y-m-d",strtotime($fecha_actual."+ 30 days"));
        //     $registro['solicitante'] = $Us->N_Usuario;
        //     $registro['fecha_entrega_sistema'] = $fecha_entrega_sistema;

        //     $data = Solicitud::create($registro);
        // }


        // $sp =  ServidoresPublicosCentralizada::where('Estado',1)->where('N_Usuario', $Us->N_Usuario)->get();
        // $depe=  Dependencia::where('id_Dependencia',$sp[0]->id_Dependencia)->first();
        // $dir =  Direccion::where('id_Direccion',$sp[0]->id_Direccion)->first();
        // $departamento =  Departamento::where('id_Departamento', $sp[0]->id_Departamento)->first();
        // $num = Solicitud::where('status',1)->where('libro_id',$data->libro_id)->get();
        // $pdf = PDF::loadView('libros.pdfPrestamo', compact('data','dir','departamento','sp','depe','num'));
        // return $pdf->stream('dependencia.pdf');
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
        $todayDate = Carbon::now()->format('Y-m-d');
        return view('libros.create', compact('servidorP','libro','todayDate'));
    }
    public function control()
    {
        return view('libros.control');
    }

    public function getcontrol(Request $request )
    {
//        dd($request->solicitud);
        $solicitud = $request->solicitud;
        if($solicitud == 0){
            $sol = Solicitud::where('status',0)->get();
        }elseif($solicitud == 1){
            $sol = Solicitud::where('status',1)->get();
        }elseif($solicitud == 2 ){
            $sol = Solicitud::where('status',2)->get();
        }

        return view("libros.controlSolicitud", compact('sol'));
    }

    public function historico(Request $request)
    {
        $user = auth()->user()->rfc;
        $hist = Solicitud::where('solicitante',$user)->get();
        return view('libros.historico', compact('hist'));
    }
}
