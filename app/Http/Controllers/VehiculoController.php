<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', compact('vehiculos'));
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
        $validated = $request->validate([
            'plate_number'=>'required',
            'brand' => 'required',
            'model'=>'required',
            'vehicle_type'=>'required',
            'color'=>'required',
            'capacity'=>'required',
            'daily_rate'=>'required',
            'status'=>'required'
        ], [
            'plate_number.required'=>"La placa es un requisito.",
            'brand.required'=>"La banda es un requisito",
            'model.required'=>"El modelo es un requisito",
            'vehicle_type.required'=>"El modelo del vehiculo es un requisito.",
            'color.required'=>"El color es un requisito",
            'capacity.required'=>"La capacidad es un requisito",
            'daily_rate.required'=>"La tarifa diaria es un requisito",
            'status.required'=>"El estado es un requisito."
        ]);
        Vehiculo::create($validated);
        return redirect()->route('vehiculos.index')->with('status', 'Vehiculo registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        $validated = $request->validate([
            'plate_number'=>'required',
            'brand' => 'required',
            'model'=>'required',
            'vehicle_type'=>'required',
            'color'=>'required',
            'capacity'=>'required',
            'daily_rate'=>'required',
            'status'=>'required'
        ], [
            'plate_number.required'=>"La placa es un requisito.",
            'brand.required'=>"La banda es un requisito",
            'model.required'=>"El modelo es un requisito",
            'vehicle_type.required'=>"El modelo del vehiculo es un requisito.",
            'color.required'=>"El color es un requisito",
            'capacity.required'=>"La capacidad es un requisito",
            'daily_rate.required'=>"La tarifa diaria es un requisito",
            'status.required'=>"El estado es un requisito."
        ]);

         $vehiculo->update($validated);
        return redirect()->route('vehiculos.index')->with('status', 'Vehiculo actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $vehiculos->findOrFail($id);
       $vehiculos->delete();

    return redirect()->route('vehiculos.index')->with('status', 'Vehiculo eliminado');
    }
}
