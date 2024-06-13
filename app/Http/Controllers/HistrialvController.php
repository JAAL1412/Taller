<?php

namespace App\Http\Controllers;

use App\Models\histrialv;
use Illuminate\Http\Request;

class HistrialvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dimas');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(histrialv $histrialv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(histrialv $histrialv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, histrialv $histrialv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(histrialv $histrialv)
    {
        //
    }
}
