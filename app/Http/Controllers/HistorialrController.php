<?php

namespace App\Http\Controllers;

use App\Models\historialr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HistorialrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historialr=DB::select('SELECT * from historialrs order by id desc');
        return view('historial', compact('historial'));   
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function salida(Request $request)
    {
        $id=$request->post('id');
        DB::table('historialrs')->where('idhistorial', $id)
        ->update(['reparacion'=> $request->post('reparacion'), 'comentario'=>$request->post('comentario')]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(historialr $historialr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(historialr $historialr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    /**
     * Remove the specified resource from storage.
     */
   
}
