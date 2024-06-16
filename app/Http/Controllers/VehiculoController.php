<?php

namespace App\Http\Controllers;

use App\Models\vehiculo;
use App\Models\cliente;
use App\Models\histrialesv;
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
            $datoh=DB::select("SELECT ingreso, salida, historialesvs.id, reparacion, monto, transacciones.comentario FROM historialesvs, historialrs, transacciones Where placav='" .$xd."'");
            
            return view('busqueda', compact('datos'),compact('datoh'))->with('x', $x);
        }
        
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $dueños= DB::select("SELECT * FROM clientes");
        return view('anggelo' , compact('dueños'));
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
        $vehiculo->dueño= $request->post('dueño');
        $vehiculo->save();

        $x=true;
        $datos=DB::select("SELECT placa, vehiculos.id as vid, nombre,apellido, color, modelo FROM vehiculos, clientes where  clientes.id=vehiculos.dueño and placa='".$vehiculo->placa."' ");
        $datoh=DB::select("SELECT ingreso, salida, historialesvs.id, reparacion, monto, transacciones.comentario FROM historialesvs, historialr, transacciones Where placav='" .$vehiculo->placa."'");
            
        return view('busqueda', compact('datos'),compact('datoh'))->with('x', $x);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $datos= vehiculo::find($id);
        $did= $datos->dueño;
        $dueño= cliente::find($did);
        $dueños= DB::select("SELECT * FROM clientes");
        return view('dimas', compact('datos'), compact('dueños'))->with('dueño', $dueño);

    }
    public function edit(vehiculo $vehiculo)
    {
    }

    public function update(Request $request, $id)
    { 
        $x=false;
        $datos = vehiculo:: find($id);
        $datos->placa = $request->post('placa');
        $datos->modelo= $request->post('modelo');
        $datos->fecha_fabri = $request->post('año');
        $datos->pais= $request->post('pais');
        $datos->color= $request->post('color');
        $datos->dueño=$request->post('dueño');
        $datos->save();
        return view('busqueda')->with('x', $x);
    }
}
