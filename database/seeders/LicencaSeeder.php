<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use App\Models\Licenca\Licenca;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\TipoLicenca\TipoLicenca;
use App\Models\LicencaPatrimonio\LicencaPatrimonio;

class LicencaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $licencas = DB::connection('mysql2')->table('licencas')->get();

        foreach ($licencas as $licenca) {
            Licenca::create([
                'id' => $licenca->id,
                'email' => $licenca->email,
                'quantidade' => $licenca->quantidade,
                'tipo_licenca_id' => $licenca->cliente_id == 6 ? TipoLicenca::LOGICA : TipoLicenca::CLIENTE,
            ]);
        }

        $patrimonioLicencas = DB::connection('mysql2')->table('patrimonio_licencas')->get();

        foreach ($patrimonioLicencas as $patrimonioLicenca) {
            $licenca = DB::connection('mysql2')->table('licencas')->find($patrimonioLicenca->licenca_id);

            LicencaPatrimonio::create([
                'host_name' => $patrimonioLicenca->host_name,
                'licenca_id' => isset($licenca->id) ? $patrimonioLicenca->licenca_id : null,
                'patrimonio_id' => $patrimonioLicenca->patrimonio_id,
            ]);
        }
    }
}
