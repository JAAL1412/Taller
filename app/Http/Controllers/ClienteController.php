<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente=DB::select('SELECT * from clientes order by id desc');
        return view('clientes', compact('cliente'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function salida( Request $request)
    {
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
        $cliente->direccion = $request->post('direccion');
        $cliente->telefono= $request->post('telefono');
        $cliente->correo= $request->post('correo');
        $cliente->comentario= $request->post('comentario');
        $cliente->save();
        
        return back();


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
