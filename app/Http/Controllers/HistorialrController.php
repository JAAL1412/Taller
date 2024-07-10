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
        ->update(['comentario'=>$request->post('comentario')]);
        return back();
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
