<?php

namespace App\Http\Controllers;

use App\Models\Miembro;
use Illuminate\Http\Request;

class MiembroController extends Controller
{
    /*TODO: redirigiendo hacia la vista de listado de miembros */
    public function index(){
        $miembros = Miembro::all();
        return view('miembros.index',['miembros'=>$miembros]);
    }

    /*TODO: redireccionando hacia la vista de creación de miembros */
    public function create(){
        return view('miembros.create');
    }

    public function store(Request $request){
        /*$request()->all() -> pide que se rescate toda la información que se ingrese por el formulario 
        $miembro = request()->all();
        return response()->json($miembro);*/

        /* valición de los datos que se ingresan por el formulario */
        $request->validate([
            'nombre_apellido' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'fecha_nacimiento' => 'required',
            'email' => 'required',
            'curso' => 'required',
        ]);

        $miembro = new Miembro();
        $miembro->nombre_apellido = $request->nombre_apellido;
        $miembro->direccion = $request->direccion;
        $miembro->telefono = $request->telefono;
        $miembro->fecha_nacimiento = $request->fecha_nacimiento;
        $miembro->genero = $request->genero;
        $miembro->email = $request->email;
        $miembro->estado = '1';
        $miembro->curso = $request->curso;

        //$miembro->fotografia = $request->fotografia;
        $miembro->fotografia = $request->file('fotografia')->store('fotografias_miembros','public');

        $miembro->fecha_ingreso = '2024-05-07';

        $miembro->save();
    }
}
