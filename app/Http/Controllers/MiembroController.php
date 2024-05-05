<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiembroController extends Controller
{
    /*TODO: redirigiendo hacia la vista de listado de miembros */
    public function index(){
        return view('miembros.index');
    }
}
