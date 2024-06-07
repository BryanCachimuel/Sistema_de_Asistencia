<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Miembro;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        $cursos = Curso::all();
        $miembros = Miembro::all();
        $usuarios = User::all();
        return view('index',['cursos'=>$cursos,'miembros'=>$miembros,'usuarios'=>$usuarios]);
    }
}
