<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Barryvdh\DomPDF\Facade\Pdf;
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
    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.edit', ['curso'=>$curso]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_curso'=>'required',
            'fecha_ingreso'=>'required',
            'descripcion'=>'required'
        ]);

        $curso = Curso::find($id);
        $curso->nombre_curso =  $request->nombre_curso;
        $curso->descripcion =  $request->descripcion;
        $curso->fecha_ingreso =  $request->fecha_ingreso;

        $curso->save();

        return redirect()->route('cursos.index')->with('mensaje','Curso Actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Curso::destroy($id);
        return redirect()->route('cursos.index')->with('mensaje','Curso Eliminado Correctamente');
    }

    public function reportes()
    {
        return view('cursos.reportes');
    }

    public function reportesPdf()
    {
        $cursos = Curso::paginate();
        $pdf = Pdf::loadView('cursos.pdf', ['cursos'=>$cursos]);
        return $pdf->stream();
    }
}
