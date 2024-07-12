<?php

namespace App\Http\Controllers;

use App\Models\historialr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HistorialrController extends Controller
{
   

    /**
     * Actualizar la reparación.
     */
    public function salida(Request $request)
    {
        $id=$request->post('id');
        DB::table('historialrs')->where('idhistorial', $id)
        ->update(['comentario'=>$request->post('comentario')]);
        return back();
    }
   
}
