<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrecosSeeder extends Seeder
{
    public function run()
    {
        DB::table('precos')->insert([
            ['servico' => 'Taxa de Parque', 'preco' => 5000.00],
            ['servico' => 'Seguro de Parque', 'preco' => 3000.00],
            ['servico' => 'Taxa de Serviço (20%)', 'preco' => 0.20], // Percentual
        ]);
    }
}
