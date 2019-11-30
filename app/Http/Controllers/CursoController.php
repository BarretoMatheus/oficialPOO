<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    public function index(){
        $cursos=curso::all();
        return view ('cursos', compact ('cursos'));
    }
}
