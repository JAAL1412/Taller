<?php

namespace App\Http\Controllers;

use App\Models\transaccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaccionController extends Controller
{

    /**
     * Actualizar la transacción.
     */
    public function update(Request $request)
    {
        DB::table('transaccions')->where('id', $request->post('idt'))
        ->update(['comentario'=>$request->post('coment')]);
        return back();
    }
}
