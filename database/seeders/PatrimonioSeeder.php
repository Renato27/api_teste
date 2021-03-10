<?php

namespace Database\Seeders;

use App\Models\Fabricante\Fabricante;
use App\Models\Modelo\Modelo;
use App\Models\Patrimonio\Patrimonio;
use App\Models\PatrimonioAlugado\PatrimonioAlugado;
use App\Models\TipoPatrimonio\TipoPatrimonio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatrimonioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fabricantes = DB::connection('mysql2')->table('fabricantes')->get();

        foreach ($fabricantes as $fabricante) {
            Fabricante::create([
                'id'    => $fabricante->idfabricantes,
                'nome'  => $fabricante->nomeFabricante
            ]);
        }

        $tipos = DB::connection('mysql2')->table('tipos')->get();

        foreach($tipos as $tipo){

            TipoPatrimonio::create([
                'id'    => $tipo->idtipos,
                'nome'  => $tipo->nomeTipos
            ]);
        }

        $modelos = DB::connection('mysql2')->table('modelos')->get();

        foreach($modelos as $modelo){

            Modelo::create([
                'id'                    => $modelo->idmodelos,
                'nome'                  => $modelo->nomeModelo,
                'tipo_patrimonio_id'    => $modelo->tipos_idtipos
            ]);
        }

        $patrimonios = DB::connection('mysql2')->table('patrimonios')->get();

        foreach($patrimonios as $patrimonio){
            $patrimonio1 = Patrimonio::create([

                'id'                => $patrimonio->idpatrimonios,
                'numero_patrimonio' => $patrimonio->numeroPatrimonio,
                'numero_serie'      => $patrimonio->numeroSerie,
                'modelo_id'         => $patrimonio->modelos_idmodelos,
                'tipo_patrimonio_id' => null,
                'compra_id'     => null,
                'fabricante_id' => $patrimonio->fabricantes_idfabricantes,
                'fornecedor_id' => $patrimonio->fornecedores_idfornecedores,
                'estado_patrimonio_id' => $patrimonio->situacao_idsituacao,
                'created_at'    => $patrimonio->created,
                'updated_at'    => $patrimonio->updated
                ]);

                $modelo = Modelo::find($patrimonio1->modelo_id);

                $patrimonio1->tipo_patrimonio_id = $modelo->tipo_patrimonio_id;
                $patrimonio1->save();
        }
    }
}
