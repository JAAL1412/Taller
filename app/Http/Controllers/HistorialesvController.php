<?php

namespace App\Http\Controllers;

use App\Models\historialesv;
use App\Models\historialr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistorialesvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historial=DB::select("SELECT historialesvs.id, ingreso, salida, placav, reparacion, comentario from historialrs, historialesvs where idhistorial=historialesvs.id");
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
    public function store(Request $request)
    {
        //
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
