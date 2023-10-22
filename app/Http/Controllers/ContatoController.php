<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\MotivoContato;

class ContatoController extends Controller
{
    public function contato(){
        return view('site.contato', ['titulo' => 'Contato (teste)'], ['motivo_contatos' => MotivoContato::all()]);
    }
    public function salvar(Request $request){
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required|email',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000',
        ]);
        SiteContato::create($request->all());
        //$contato->create($request->all());
//        $contato->nome = $request->input('nome');
//        $contato->telefone = $request->input('telefone');
//        $contato->email = $request->input('email');
//        $contato->motivo_contato = $request->input('motivo_contato');
//        $contato->mensagem = $request->input('mensagem');
//        $contato->save();
        return view('site.contato', ['titulo' => 'Contato (teste)'], ['motivo_contatos' => MotivoContato::all()]);
    }
}
