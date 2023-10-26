<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        return view('app.fornecedor.index');
    }

    public function listar(Request $request)
    {
        $fornecedores = Fornecedor::where('nome', 'like', "%{$request->nome}%")
            ->where('site', 'like', "%{$request->site}%")
            ->where('uf', 'like', "%{$request->uf}%")
            ->where('email', 'like', "%{$request->email}%")
            ->paginate(10);
        $msg = isset($fornecedores[$request->fornecedor]) ? "Fornecedor: {$fornecedores[$request->fornecedor]}" : 'Fornecedor não encontrado';
        return view('app.fornecedor.listar', ['msg' => $msg, 'fornecedores' => $fornecedores, 'request' => $request->all()]);
    }

    public function adicionar(Request $request)
    {
        $msg = '';
        if (!empty($request->input('_token')) && empty($request->input('id'))) {
            $regras = [
                'nome' => 'required|min:3|max:40|unique:fornecedores',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email'
            ];
            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido',
                'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres',
                'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
                'nome.unique' => 'O nome informado já está em uso',
                'site.required' => 'O campo site deve ser preenchido',
                'uf.min' => 'O campo uf deve ter no mínimo 2 caracteres',
                'uf.max' => 'O campo uf deve ter no máximo 2 caracteres',
                'email.email' => 'O email informado não é válido'
            ];
            $request->validate($regras, $feedback);
            $fornecedor = new Fornecedor();
            $fornecedor->create($request->all());
            $msg = 'Fornecedor adicionado com sucesso';
        }
        if (!empty($request->input('_token')) && !empty($request->input('id'))) {
            $fornecedor = Fornecedor::find($request->input('id'));
            $update = $fornecedor->update($request->all());
            if ($update){
                $msg = 'Fornecedor atualizado com sucesso';
            }
            else{
                $msg = 'Erro ao atualizar o fornecedor';
            }
            return redirect()->route('app.fornecedor.editar', ['id'=>$request->input('id'),'msg' => $msg]);
        }
        return view('app.fornecedor.adicionar', ['msg' => $msg]);
    }

    public function editar($id, $msg = '')
    {
        $fornecedor = Fornecedor::find($id);
        return view('app.fornecedor.adicionar', ['fornecedor' => $fornecedor, 'msg' => $msg]);
    }
    public function excluir($id)
    {
        Fornecedor::find($id)->delete();
        return redirect()->route('app.fornecedor');
    }
}
