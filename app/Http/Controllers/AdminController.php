<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class AdminController extends Controller
{
    public function index(){
        $cursos = Curso::all();
        return view('index',['cursos'=>$cursos]);
    }
}
