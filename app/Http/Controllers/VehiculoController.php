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
     *Vista de busqueda
     */
    public function index(Request $request)
    {
        $f= $request->post('bt');
        
        if($f==0 or $request->post('search')==null){
            $x=false;
            return view ('busqueda', compact('x'));
        }
        /*Función para realizar la busqueda */
        if($f==1 and $request->post('search')!=null){
            $x=true;
            $xd= $request->post('search');
            $datos=DB::select("SELECT placa, vehiculos.id as vid, nombre,apellido, color, modelo FROM vehiculos, clientes where  clientes.id=vehiculos.dueño and modelo like ?",['%'.$xd.'%'] );
            $datoh=DB::select("SELECT ingreso, idtransaccion, salida, historialesvs.id, transaccions.id as idt ,reparacion, monto, transaccions.comentario , placav, historialrs.comentario as coment, concepto FROM vehiculos LEFT JOIN historialesvs on placav=placa LEFT JOIN historialrs ON historialesvs.id = historialrs.idhistorial LEFT JOIN transaccions ON historialrs.idtransaccion = transaccions.id where modelo like ? order by historialesvs.id desc",['%'.$xd.'%'] );
            return view('busqueda', compact('datoh','datos'))->with('x', $x);
        }
        
    }
    /** Vista para añadir un vehiculo */    
    public function create(Request $request)
    {
        $dueños= DB::select("SELECT * FROM clientes");
        return view('vehiculo' , compact('dueños'));
    }
    /** Función para añadir un nuevo vehiculo */
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

        /**Segmento para reenviar a la vista de busqueda con la información del vehiculo */
        $x=true;
        $datos=DB::select("SELECT placa, vehiculos.id as vid, nombre,apellido, color, modelo FROM vehiculos, clientes where  clientes.id=vehiculos.dueño and placa='".$vehiculo->placa."' ");
        $datoh=DB::select("SELECT ingreso, salida, historialesvs.id, reparacion, monto, transaccions.comentario FROM historialesvs, historialrs, transaccions Where placav='" .$vehiculo->placa."'");
            
        return view('busqueda', compact('datos'),compact('datoh'))->with('x', $x);

    }
    /** Función para la vista de edición de vehículos */
    public function show($id)
    {
        $datos= DB::table('vehiculos')->where('placa',$id)->first();
        $did= $datos->dueño;
        $dueño= cliente::find($did);
        $dueños= DB::select("SELECT * FROM clientes");
        return view('vehiculoedit', compact('datos'), compact('dueños'))->with('dueño', $dueño);

    }
    /**Función para dar la información mediante la placa del vehiculo */
    public function search(Request $request, $placav)
    {
        $x=true;
        $datos=DB::select("SELECT placa, vehiculos.id as vid, nombre,apellido, color, modelo FROM vehiculos, clientes where  clientes.id=vehiculos.dueño and placa='".$placav."' ");
        $datoh=DB::select("SELECT ingreso, idtransaccion, salida, historialesvs.id, reparacion, monto, transaccions.comentario, placav, historialrs.comentario as coment, concepto, transaccions.id as idt FROM historialesvs LEFT JOIN historialrs ON historialesvs.id = historialrs.idhistorial LEFT JOIN transaccions ON historialrs.idtransaccion = transaccions.id where placav= ? order by historialesvs.id desc ",["".$placav.""] );
        return view('busqueda', compact('datos'),compact('datoh'))->with('x', $x);
    }

    /**Función para actualizar los datos del vehículo */
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
