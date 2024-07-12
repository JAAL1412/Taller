<?php

namespace App\Http\Controllers;

use App\Models\historialesv;
use App\Models\historialr;
use App\Models\transaccion;
use App\Models\vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistorialesvController extends Controller
{
    /**
     * Mostrar la vista con el historial
     */
    public function index()
    {
        $vehiculos=vehiculo::all();
    $historial=DB::select("SELECT historialesvs.id,  ingreso,  salida,  placav,  reparacion,  historialrs.comentario AS comenta1, monto, concepto, transaccions.comentario AS comenta2 FROM  historialesvs  LEFT JOIN historialrs ON historialesvs.id = historialrs.idhistorial LEFT JOIN transaccions ON historialrs.idtransaccion = transaccions.id ORDER BY  historialesvs.id DESC;");
        
        return view('historial', compact('historial'), compact('vehiculos'));
    }

    /**
     * Añadir salida y todo lo que esta representa (añade transaccion y reparación)
     */
    public function salida(Request $request)
    {
        $id=$request->post('id');
        $historial=historialesv::find($id);
        $historial->salida=now();
        $historial->save();
        $transaccion= new transaccion;
        $transaccion->monto= $request->post('monto');
        $transaccion->concepto= $request->post('concepto');
        $transaccion->comentario=$request->post('comenta');
        $transaccion->fechatransa= now();
        $transaccion->save();
        DB::table('historialrs')->where('idhistorial', $historial->id)
        ->update(['reparacion'=> $request->post('reparacion'), 'idtransaccion'=>$transaccion->id]);
        return back();
    }

    /**
     * Agregar un ingreso al historial.
     */
    public function store(Request $request)
    {
        $historial= new historialesv;
        $historial->placav=$request->post('vehiculo');
        $historial->ingreso=now();
        $historial->save();
        $reparacion=new historialr;
        $reparacion->idhistorial= $historial->id;
        $reparacion->comentario= $request->post('comentario');
        $reparacion->save();
        return back();
    }
}
