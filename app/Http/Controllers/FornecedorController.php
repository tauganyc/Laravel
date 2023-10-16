<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '00.000.000/0000-00',
                'ddd' => '11',
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85',
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32',
                'telefone' => '0000-0000'
            ]
        ];
        //o compact pega o nome da variavel e o valor dela e cria um array associativo com o nome da variavel como chave e o valor dela como valor
        //compact('fornecedores') é o mesmo que ['fornecedores' => $fornecedores] e vai para a view
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
