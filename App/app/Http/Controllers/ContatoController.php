<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = Contato::all();
        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req)
    {
        $req->validate([
            'nome'  => 'required|max:255',
            'tel'   => 'required|max:20',
            'email' => 'required|email|max:255',
        ]);

        Contato::create($req->only(['nome', 'tel', 'email']));

        return redirect('/contato');
    }

    public function editar()
    {
        return "Esse é o Editar do ContatoController";
    }
}
