<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;

class ListarTabelas extends Controller
{
    public function listarformularios() {
        // 
        $formulario = Formulario::all();
        return view('envios', ['formulario' => $formulario]);
    }
    public function novoformulario() {
        // 
        $formulario = Formulario::all();
        return view('index', ['formulario' => $formulario]);
    }
}
