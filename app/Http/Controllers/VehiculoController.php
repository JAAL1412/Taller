<?php

namespace App\Http\Controllers;

use App\Models\vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $f= $request->post('bt');
        
        if($f==0 or $request->post('search')==null){
            $x=false;
            return view('busqueda', compact('x'));
        }
        if($f==1 and $request->post('search')!=null){
            $x=true;
            $xd= $request->post('search');
            $datos=DB::select("SELECT placa, vehiculos.id as vid, nombre,apellido, color, modelo FROM vehiculos, clientes where  clientes.id=vehiculos.dueño and placa='".$xd."' ");
            $datoh=DB::select("SELECT ingreso, salida, historialesv.id, reparacion, monto, transacciones.comentario FROM historialesv, historialr, transacciones Where placav='" .$xd."'");
            
            return view('busqueda', compact('datos'),compact('datoh'))->with('x', $x);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

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
    public function show($id)
    {
        /**$datos = DB::select('SELECT transacciones.id,titulo, tipo, nombre_medicina, monto, nombre_cliente, cantidad, transacciones.comentario, transacciones.created_at FROM clientes, medicinas, transacciones WHERE medicinas.id=transacciones.medicina AND clientes.id=transacciones.cliente');
        return view('tablaregistro', compact('datos'));*/
        $datos = vehiculo::find($id);
        return view('dimas', compact('datos'));

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
