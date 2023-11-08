<?php

namespace App\Http\Controllers;

use App\Models\Corredor;
use App\Http\Controllers\Controller;
use App\Models\Corrida;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class CorredorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('corredors.index', ['corredors'=>Corredor::all(), 'corridas'=>Corrida::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('corredors.create',['corridas'=>Corrida::all()]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Corredor::create($request->all());
        return redirect(route('corredors.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Corredor $corredor)
    {
        return view('corredors.show',['corredor'=>$corredor]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Corredor $corredor)
    {
        return view('corredors.edit',['corredor'=>$corredor, 'corridas'=>Corrida::all()]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Corredor $corredor)
    {
        $corredor->update($request->all());
        return redirect(route('corredors.show',$corredor->id));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Corredor $corredor)
    {
       $corredor->delete();
       return redirect(route('corredors.index'));
    }
}
