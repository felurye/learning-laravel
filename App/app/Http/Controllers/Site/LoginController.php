<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function entrar(Request $req)
    {
        $credenciais = $req->only(['email', 'senha']);

        if (Auth::attempt(['email' => $credenciais['email'], 'password' => $credenciais['senha']])) {
            return redirect()->route('admin.cursos');
        }

        return redirect()->route('site.login');
    }

    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}
