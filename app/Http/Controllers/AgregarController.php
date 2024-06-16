<?php

namespace App\Http\Controllers;

use App\Models\vehiculo;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('anggelo');
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
        $vehiculo = new vehiculo;
        $vehiculo->placa = $request->post('placa');
        $vehiculo->modelo = $request->post('modelo');
        $vehiculo->fecha_fabri = $request->post('fecha_fabri');
        $vehiculo->pais = $request->post('pais');
        $vehiculo->color = $request->post('color');
        $vehiculo->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(vehiculo $vehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vehiculo $vehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vehiculo $vehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vehiculo $vehiculo)
    {
        //
    }
}
