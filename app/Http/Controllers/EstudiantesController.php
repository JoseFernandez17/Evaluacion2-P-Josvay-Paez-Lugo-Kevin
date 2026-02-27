<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Estudiantes;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\HttpCache\Esi;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Estudiantes::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $curso = Curso::all();
        return view('estudiantes.create', compact('curso'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|email',
            'curso_id' => 'required|exists:cursos,id'
        ]);

        Estudiantes::create($request->all());
        
        return redirect()->route('estudiantes.index')->with('succes', 'Estudante registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estudiantes $estudiantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudiantes $estudiantes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estudiantes $estudiantes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudiantes $estudiantes)
    {
        //
    }
}
