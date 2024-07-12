<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Regresar la vista wlecome
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Función para ejecutar el inicio de sesión
     */
    public function verifica(Request $request)
    { 
        $name=$request->post('User');
        $datos= DB::table('users')->where('name', $name)->get('password')->first();
        if($datos!=null){
            if($request->post('Contra')==$datos->password){
            return redirect()->route('historial.index');
            }}
        
            $mensaje="Usuario o contraseñña errado";
        return back()->with('error',$mensaje);
    }
}
