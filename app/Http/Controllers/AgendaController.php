<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contatos;
use App\Models\User;

class AgendaController extends Controller
{
    public function index(){

        $userid = $_SESSION['id'];
        $tableData = Contatos::where('id_usuario', $userid)->get();
        //$tableData = Contatos::all()->sortby("nome");
        return view('agenda.index')->with(compact("tableData"));

    }

    public function create(Request $request){

        return view("agenda.manage");
    }
    public function store(Request $request){

        $request->validate([
            'nome' => 'required',
            'email' => 'email',
            'telefone' => 'required',
            'endereco' => 'required',
        ]);
        $contato = new Contatos();
        $contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->telefone = $request->input('telefone');
        $contato->endereco = $request->input('endereco');
        $contato->id_usuario = $_SESSION['id'];

        $contato->save();
        return redirect()->route('agenda.index');
    }
}
