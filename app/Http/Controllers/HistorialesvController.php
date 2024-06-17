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
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos=vehiculo::all();
        $historial=DB::select("SELECT historialesvs.id, ingreso, salida, placav, reparacion, comentario from historialrs, historialesvs where idhistorial=historialesvs.id ORDER BY historialesvs.id DESC");
        return view('historial', compact('historial'), compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
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
     * Store a newly created resource in storage.
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

    /**
     * Display the specified resource.
     */
    public function show(historialesv $historialesv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(historialesv $historialesv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, historialesv $historialesv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(historialesv $historialesv)
    {
        //
    }
}
