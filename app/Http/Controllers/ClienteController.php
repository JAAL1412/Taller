<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clientes');
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
        $cliente = new cliente;
        $cliente->nombre = $request->post('nombre');
        $cliente->apellido = $request->post('apellido');
        $cliente->documento = $request->post('documento');
        $cliente->fecha_nacimiento = $request->post('fecha_nacimiento');
        $cliente->direccion = $request->post('direccion');
        $cliente->telefono= $request->post('telefono');
        $cliente->correo= $request->post('correo');
        $cliente->comentario= $request->post('comentario');
        $cliente->save();
        
        return view('clientes');


    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cliente $cliente)
    {
        //
    }
}
