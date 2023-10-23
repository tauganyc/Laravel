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
        $request->validate([//validação de dados
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required|email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000',
        ],
        [//mensagens de erro
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome precisa ter no máximo 40 caracteres',
            'email.email' => 'O campo email precisa ser um email válido',
            'motivo_contatos_id.required' => 'O campo motivo do contato precisa ser preenchido',
            'mensagem.max' => 'O campo mensagem precisa ter no máximo 2000 caracteres',
            'required' => 'O campo :attribute precisa ser preenchido'
        ]
        );
        SiteContato::create($request->all());
        return view('site.contato', ['titulo' => 'Contato (teste)'], ['motivo_contatos' => MotivoContato::all()]);
    }
}
