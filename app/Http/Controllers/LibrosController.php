<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use App\Models\Solicitud;
use App\Models\Validacion;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\ServidoresPublicosCentralizada;
use App\Models\ServidorPulbicoDetail;
use App\Models\Departamento;
use App\Models\Dependencia;
use App\Models\Direccion;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

        $solicitud = Solicitud::find($id);
         dd($request->aprobacion);
        if($request->aprobacion == 2){
            $sol['status'] = 2;
            $sol['observaciones'] = $request->observaciones;
            $libro = Libros::find($solicitud->libro_id);
            $stock =$libro['stock'];
            $stock = $stock + 1;
            $lib['stock'] = $stock;
            $libro->update($lib);
        }elseif($request->aprobacion == 1){
            $sol['status'] = 1;
            $sol['observaciones'] = $request->observaciones;

            $libro = Libros::find($solicitud->libro_id);
            $stock =$libro['stock'];
            $stock = $stock - 1;
            $lib['stock'] = $stock;
            $libro->update($lib);
        }elseif($request->entregado == 1){
            $sol['status'] = 2;
             $sol['observaciones'] = 'ENTREGADO';
             $libro = Libros::find($solicitud->libro_id);
             $stock =$libro['stock'];
             $stock = $stock + 1;
             $lib['stock'] = $stock;
             $libro->update($lib);
        }elseif($request->entregado == 2){
            $sol['status'] = 1;
             $sol['observaciones'] = 'NO ENTREGADO';
        }

        // elseif($solicitud->status == 0){
        //     $sol['status'] = 1;
        //     $sol['observaciones'] = $request->observaciones;
        // }elseif($solicitud->status == 1){
        //     if ($request->entregado == 1){
        //         $sol['status'] =2;
        //     }
        // }
        $solicitud->update($sol);
        return redirect('control');
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

    public function solicitudes(){
        $libros = Libros::orderBy('id', 'DESC')->get();
        foreach ($libros as $libro){
            $solicitudes = Solicitud::where('status','!=','2')->where('libro_id', $libro->id)->first();
            if ($solicitudes){
                $libro['disponible'] = $solicitudes->created_at;
                if($solicitudes->status == 0){
                    $libro['status'] = 'Pendiente por aprobar';
                }else if ($solicitudes->status == 1){
                    $libro['status'] = 'Prestado';
                }
            }
        }
        return view('libros.verSolicitudes', compact('libros'));
    }
    public function getLibros(Request $request)
    {
        $search = $request->search;

        $libros = Libros::orderby('nombre', 'asc')->select('*')->where('nombre', 'like', '%' .$search . '%')->get();

        foreach ($libros as $libro){
            $solicitudes = Solicitud::where('status','!=','2')->where('libro_id', $libro->id)->first();
            if ($solicitudes){
                $libro['disponible'] = $solicitudes->fecha_entrega_sistema;
            }
        }
        return view('libros.busqueda', compact('libros'));
    }

    public function aprobar($id){
    //    dd($id);
        $solicitud = Solicitud::find($id);
        $validacion =Arr::pluck(Validacion::all(), "tipo", "id");
        return view('libros.aprobar', compact('solicitud','validacion'));
    }

    public function pdf($id)
    {
        $data = Solicitud::find($id);
        $sp =  ServidoresPublicosCentralizada::where('Estado',1)->where('N_Usuario', $data->solicitante)->get();
        $depe=  Dependencia::where('id_Dependencia',$sp[0]->id_Dependencia)->first();
        $dir =  Direccion::where('id_Direccion',$sp[0]->id_Direccion)->first();
        $departamento =  Departamento::where('id_Departamento', $sp[0]->id_Departamento)->first();
        $num = Solicitud::where('status',1)->where('libro_id',$data->libro_id)->get();
        $pdf = PDF::loadView('libros.pdfPrestamo', compact('data','dir','departamento','sp','depe','num'));
        return $pdf->stream('dependencia.pdf');
    }

    public function busquedaLibro(Request $request){
        $libro = Libros::all();
    }

    public function verLibrosAprobar($id){
        $solicitudes = Solicitud::where('status','!=','2')->where('libro_id', $id)->get();

        return view('libros.verSolicitudesGnal', compact('solicitudes'));
    }
}
