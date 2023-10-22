<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       fornecedor::factory()->count(100)->create();
//        $fornecedor = new Fornecedor();
//        $fornecedor->nome = 'fornecedor 100';
//        $fornecedor->site = 'fornecedor100.com.br';
//        $fornecedor->uf = 'SP';
//        $fornecedor->email = 'fornecedor100@mail.com';
//        $fornecedor->save();
//
//        Fornecedor::create([
//            'nome' => 'fornecedor 200',
//            'site' => 'fornecedor200.com.br',
//            'uf' => 'SP',
//            'email' => 'contato@fornecedor200.com']);
//
//        DB::table('fornecedores')->insert([
//            'nome' => 'fornecedor 300',
//            'site' => 'fornecedor300.com.br',
//            'uf' => 'SP',
//            'email' => 'contato@fornecedor300.com']);
    }
}
