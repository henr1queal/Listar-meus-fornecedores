<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;

class ListarTabelas extends Controller
{
    public function listarformularios()
    {
        // 
        $formulario = Formulario::all();
        return view('envios', ['formulario' => $formulario]);
    }
    public function novoformulario()
    {

        $formulario = Formulario::all();
        return view('index', ['formulario' => $formulario]);
    }
    public function novoformulario_submit(Request $request)
    {
        $codigo = $request->input('codigo');
        $tipo = $request->input('tipo');
        $subtipo = $request->input('subtipo');
        $empresa = $request->input('empresa');
        $descritivo = $request->input('descritivo');
        $site = $request->input('site');
        $email = $request->input('email');
        $contato = $request->input('contato');
        $celular = $request->input('celular');
        $telefone = $request->input('telefone');
        $endereco = $request->input('endereco');
        $bairro = $request->input('bairro');
        $numero_casa = $request->input('numero_casa');
        $formulario = new Formulario();
        $formulario->codigo = $codigo;
        $formulario->tipo = $tipo;
        $formulario->subtipo = $subtipo;
        $formulario->empresa = $empresa;
        $formulario->descritivo = $descritivo;
        $formulario->site = $site;
        $formulario->email = $email;
        $formulario->contato = $contato;
        $formulario->celular = $celular;
        $formulario->telefone = $telefone;
        $formulario->endereco = $endereco;
        $formulario->bairro = $bairro;
        $formulario->numero_casa = $numero_casa;
        $formulario->save();
        return view('index');
    }
}
