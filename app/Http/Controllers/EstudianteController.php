<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use App\Http\Requests\CrearEstudianteRequest;
use App\Http\Requests\ActualizarEstudianteRequest;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Estudiante::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CrearEstudianteRequest $request)
    {
        $estudiante = Estudiante::create($request->validated());
        return response()->json($estudiante, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        /* $estudiante = Estudiante::findOrFail($id); */
        $estudiante = Estudiante::with('categoria')->findOrFail($id);
        return response()->json($estudiante);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActualizarEstudianteRequest $request, $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->update($request->validated());
        return response()->json($estudiante, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();
        return response()->json(null, 204);
    }
}
