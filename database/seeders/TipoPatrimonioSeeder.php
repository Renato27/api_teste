<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoPatrimonioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_patrimonios')->insert([
            ['nome' => 'ACCESS POINT'],
            ['nome' => 'CAIXA DE SOM'],
            ['nome' => 'CENTRAL TELEFONICA'],
            ['nome' => 'CHAVEADOR KVM'],
            ['nome' => 'DESKTOP'],
            ['nome' => 'ESTABILIZADOR'],
            ['nome' => 'FIREWALL'],
            ['nome' => 'FRAGMENTADORA'],
            ['nome' => 'HD EXTERNO'],
            ['nome' => 'HEADSET'],
            ['nome' => 'IMPRESSORA'],
            ['nome' => 'KVM'],
            ['nome' => 'MICROFONE SEM'],
            ['nome' => 'MODEM'],
            ['nome' => 'MONITOR'],
            ['nome' => 'MULTIFUNCIONAL'],
            ['nome' => 'NOBREAK'],
            ['nome' => 'NOTEBOOK'],
            ['nome' => 'PATCH PANEL'],
            ['nome' => 'PRINT SERVER'],
            ['nome' => 'PROJETOR'],
            ['nome' => 'ROTEADOR WIRELESS'],
            ['nome' => 'SCANNER'],
            ['nome' => 'SERVIDOR'],
            ['nome' => 'STORAGE'],
            ['nome' => 'SWITCH'],
            ['nome' => 'TABLET'],
            ['nome' => 'TELA DE PROJEÇÃO'],
            ['nome' => 'TRANSFORMADOR'],
            ['nome' => 'WORKSTATION'],
            ['nome' => 'TV'],
            ['nome' => 'ULTRABOOK'],
            ['nome' => 'SOFTWARE'],
            ['nome' => 'MOUSE E TECLADO SEM FIO'],
            ['nome' => 'MACBOOK AIR'],
        ]);
    }
}
