<?php

namespace App\Http\Controllers;

use App\Models\Accidente;
use App\Models\Persona;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class AccidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $accidentes = Accidente::all();
        return view('accidentes.index', compact('accidentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $personas = Persona::all();
        $vehiculos = Vehiculo::all();
        return view('accidentes.create', compact('personas', 'vehiculos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'hora' => 'required',
            'fecha' => 'required',
            'codigo' => 'required|unique:accidentes',
            'lugar' => 'required',
            'persona_id' => 'required|exists:personas,id',
            'vehiculo_id' => 'required|exists:vehiculos,id'
        ]);

        Accidente::create($request->all());
        return redirect()->route('accidentes.index')->with('success', 'Accidente creado exitosamente.');
    }



    /**
     * Display the specified resource.
     */
    public function show(Accidente $accidente)
    {
        //
        return view('accidentes.show', compact('accidente'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $personas = Persona::all();
        $vehiculos = Vehiculo::all();
        return view('accidentes.edit', compact('accidente', 'personas', 'vehiculos'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accidente $accidente)
    {
        //
        $request->validate([
            'hora' => 'required',
            'fecha' => 'required',
            'codigo' => 'required|unique:accidentes,codigo,' . $accidente->id,
            'lugar' => 'required',
            'persona_id' => 'required|exists:personas,id',
            'vehiculo_id' => 'required|exists:vehiculos,id'
        ]);

        $accidente->update($request->all());
        return redirect()->route('accidentes.index')->with('success', 'Accidente actualizado exitosamente.');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accidente $accidente)
    {
        //
        $accidente->delete();
        return redirect()->route('accidentes.index')->with('success', 'Accidente eliminado exitosamente.');
    }

    
}
