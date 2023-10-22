<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        $contato = new SiteContato();
//        $contato->nome = 'Sistema SG';
//        $contato->telefone = '(11) 99999-8888';
//        $contato->email = 'contato@contato';
//        $contato->motivo_contato = 1;
//        $contato->mensagem = 'Seja bem-vindo ao sistema Super Gestão';
//        $contato->save();

            SiteContato::factory()->count(100)->create();
    }
}
