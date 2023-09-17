<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth(Request $request){
            $credencias = $request->validate([
                'email'=>['required','email'],
                'password'=>['required']
            ],[
                'email.required'=>'O campo email é obrigatório',
                'email.email'=>'Email não é valido',
                'password.required'=>'O campo senha é obrigatório'
            ]);
        if(Auth::attempt($credencias)){
            $request->session()->regenerate(); //gera uma nova sessão e id
            return redirect()->intended(route('admin.dashboard'));// faz o redirecionamento e verifica se o usuario vem de qual sessão
        }else{
            return redirect()->back()->with('erro','Usuario ou senha errado');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('site.index'));
    }

    public function create(){
        return view('login.create');
    }
}
