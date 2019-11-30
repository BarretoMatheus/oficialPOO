<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coordenador;

class CoordenadorController extends Controller
{
    public function index(){
        $coordenadors=coordenador::all();
            return view ('coordenadors', compact ('coordenadors'));
    }
}
