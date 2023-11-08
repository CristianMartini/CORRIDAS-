<?php

namespace App\Http\Controllers;

use App\Models\Corrida;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CorridaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    return view ('corridas.index',['corridas'=>Corrida::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('corridas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Corrida::create($request->all());
        return redirect(route('corridas.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Corrida $corrida)
    {
        return view('corridas.show',['corrida'=>$corrida]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Corrida $corrida)
    {
         return view('corridas.edit',['corrida'=>$corrida]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Corrida $corrida)
    {
        $corrida->update($request->all());
        return redirect(route('corridas.show','corrida->id'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Corrida $corrida)
    {
        $corrida->delete();
        return redirect(route('corridas.index'));
    }
}
