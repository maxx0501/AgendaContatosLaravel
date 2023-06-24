<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = Contato::all();

        return view('agenda', compact('contatos'));
    }

    public function cadastrarContato(Request $request)
    {
        $dadosContato = $request->validate([
            'name' => 'string|required',
            'email' => 'string|required',
            'telefone' => 'string|required',
            'endereco' => 'string|required',
        ]);

        Contato::create($dadosContato);

        return redirect()->route('agenda')->with('success', 'Contato adicionado com sucesso!');
    }

    
}
