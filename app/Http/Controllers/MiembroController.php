<?php

namespace App\Http\Controllers;

use App\Models\Miembro;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MiembroController extends Controller
{
    /*TODO: redirigiendo hacia la vista de listado de miembros */
    public function index(){
        $miembros = Miembro::all()->sortByDesc('id');
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
            'fotografia' => 'required'
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

        if(!($request->hasFile('fotogrofia'))){
            /*TODO: se guarda la fotografia en en los siguientes directorio storage/public/fotografias_miembros(nombre del directorio de preferencia) */
            $miembro->fotografia = $request->file('fotografia')->store('fotografias_miembros','public');
        }

        $miembro->fecha_ingreso = date($format='Y-m-d');

        $miembro->save();

        /*TODO: una vez el registro se guarda este se redirige hacia la vista donde esta el listado de miembros */
        return redirect()->route('miembros.index')->with('mensaje','Miembro registrado Correctamente');
    }

    public function show($id){
        $miembro = Miembro::findOrFail($id) ;
        //return response()->json($miembro);
        return view('miembros.show',['miembro'=>$miembro]);
    }

    public function edit($id){
        $miembro = Miembro::findOrFail($id);
        return view('miembros.edit',['miembro'=>$miembro]);
    }

    public function update(Request $request, $id){
         /* valición de los datos que se ingresan por el formulario */
         $request->validate([
            'nombre_apellido' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'fecha_nacimiento' => 'required',
            'email' => 'required',
            'curso' => 'required',
            'fotografia' => 'required'
        ]);

        $miembro = Miembro::find($id);

        $miembro->nombre_apellido = $request->nombre_apellido;
        $miembro->direccion = $request->direccion;
        $miembro->telefono = $request->telefono;
        $miembro->fecha_nacimiento = $request->fecha_nacimiento;
        $miembro->genero = $request->genero;
        $miembro->email = $request->email;
        $miembro->curso = $request->curso;

        if(!($request->hasFile('fotogrofia'))){
            /*TODO: elimina la fotografia antigua y la reemplaza por la foto nueva que se suba */
            Storage::delete('public/'.$miembro->fotografia);
            $miembro->fotografia = $request->file('fotografia')->store('fotografias_miembros','public');
        }

        $miembro->save();

        return redirect()->route('miembros.index')->with('mensaje','Miembro Actualizado Correctamente');
    }

    public function destroy($id){
        $miembro = Miembro::find($id);
        Miembro::destroy($id);
        Storage::delete('public/'.$miembro->fotografia);
        return redirect()->route('miembros.index')->with('mensaje','Miembro Eliminado Correctamente');
    }

    public function reportes(){
        return view('miembros.reportes');
    }

    public function reportesPdf(){
        $miembros = Miembro::paginate();
        $pdf = Pdf::loadView('miembros.pdf', ['miembros'=>$miembros]);
        return $pdf->stream();
    }
}
