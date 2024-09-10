<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public function index(){
        return \App\Models\Pessoa::all();
    }

    public function store(Request $request){

    
        $pessoa = new Pessoa();
        $pessoa->name = request('nome');
        $pessoa->cpf = request('cpf');
        $pessoa->tel = request('tel');
        $pessoa->save();

        // Retorno de sucesso
        return response()->json(['message' => 'Pessoa cadastrada com sucesso!'], 201);
    }
}
