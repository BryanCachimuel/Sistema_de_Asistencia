<?php

namespace App\Http\Controllers;

use App\Models\Miembro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}
