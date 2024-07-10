<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function verifica(Request $request)
    { 
        $name=$request->post('User');
        $datos= User::find($name);
        if($datos!=null){
            if($request->post('Contra')==$datos->password){
            return redirect()->route('historial.index');
            }}
        
            $mensaje="Usuario o contraseñña errado";
        return back()->with('error',$mensaje);
    }
}
