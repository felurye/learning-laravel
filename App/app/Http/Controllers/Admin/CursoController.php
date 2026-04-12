<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CursoRequest;
use App\Curso;
use Illuminate\Support\Str;

class CursoController extends Controller
{
    public function index()
    {
        $registros = Curso::all();
        return view('admin.cursos.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }

    public function salvar(CursoRequest $req)
    {
        $dados = $req->only(['titulo', 'descricao', 'valor']);
        $dados['publicado'] = $req->boolean('publicado');

        if ($req->hasFile('imagem')) {
            $dados['imagem'] = $this->moverImagem($req);
        }

        Curso::create($dados);

        return redirect()->route('admin.cursos');
    }

    public function editar($id)
    {
        $registro = Curso::findOrFail($id);
        return view('admin.cursos.editar', compact('registro'));
    }

    public function atualizar(CursoRequest $req, $id)
    {
        $dados = $req->only(['titulo', 'descricao', 'valor']);
        $dados['publicado'] = $req->boolean('publicado');

        if ($req->hasFile('imagem')) {
            $dados['imagem'] = $this->moverImagem($req);
        }

        Curso::findOrFail($id)->update($dados);

        return redirect()->route('admin.cursos');
    }

    public function deletar($id)
    {
        Curso::findOrFail($id)->delete();
        return redirect()->route('admin.cursos');
    }

    private function moverImagem(Request $req): string
    {
        $imagem = $req->file('imagem');
        $dir = 'img/cursos';
        $nome = 'imagem_' . Str::uuid() . '.' . $imagem->guessClientExtension();
        $imagem->move(public_path($dir), $nome);
        return $dir . '/' . $nome;
    }
}
