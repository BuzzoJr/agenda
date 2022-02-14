<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(Request $request) {

        $erro = '';
        
       if($request->get('erro') == 1){
           $erro = 'Usuário ou senha não existe';
        }
       if($request->get('erro') == 2){
        $erro = 'Realizar Login';
        }

        return view('login.index');
        
    }

    public function autenticar(Request $request) {

        $rules =[
            'usuario' => 'email',
            'senha' => 'required',
        ];

        $email = $request->get('usuario');
        $password = $request->get('senha');

        $request->validate($rules);

        $user = new User();
        $verify = $user->where('email', $email)->where('password', $password)->get()->first();

        if(isset($verify->name)){
            session_start();
            $_SESSION['id'] = $verify->id;
            $_SESSION['nome'] = $verify->name;
            $_SESSION['email'] = $verify->email;

            return redirect()->route('agenda.index');
            
        }else{
            return redirect()->route('login.index', ['erro' => 1]);
        }

    }

    public function create(Request $request){

        return view("login.manage");
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'email',
            'password' => 'required',
        ]);
        $newuser = new User();
        $newuser->name = $request->input('name');
        $newuser->email = $request->input('email');
        $newuser->password = $request->input('password');

        $newuser->save();
        return redirect()->route('login.index');
    }

    public function destroy() {
        session_destroy();
        return redirect()->route('login.index');
    }
}
