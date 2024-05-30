<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Miembro;

class AdminController extends Controller
{
    public function index(){
        $cursos = Curso::all();
        $miembros = Miembro::all();
        return view('index',['cursos'=>$cursos,'miembros'=>$miembros]);
    }
}
