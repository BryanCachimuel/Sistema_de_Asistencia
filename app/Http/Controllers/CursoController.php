<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', ['cursos'=>$cursos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*$curso = request()->all();
        return response()->json($curso);*/
        $request->validate([
            'nombre_curso'=>'required',
            'fecha_ingreso'=>'required',
            'descripcion'=>'required'
        ]);

        $curso = new Curso();
        $curso->nombre_curso = $request->nombre_curso;
        $curso->descripcion = $request->descripcion;
        $curso->estado = '1';
        $curso->fecha_ingreso = $request->fecha_ingreso;
        
        $curso->save();

        return redirect()->route('cursos.index')->with('mensaje','Curso Registrado Correctamente');
    
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.show', ['curso'=>$curso]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curso $curso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
    {
        //
    }
}
