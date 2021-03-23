<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            // FornecedorSeeder::class,
            TipoChamadoSeeder::class,
            StatusChamadoSeeder::class,
            StatusPedidoSeeder::class,
            TipoUsuarioSeeder::class,
            ContratoTipoSeeder::class,
            TipoContatoSeeder::class,
            MedicaoTipoSeeder::class,
            TipoLicencaSeeder::class,
            EstadoPatrimonioSeeder::class,
            ExpedicaoEstadoSeeder::class,
            NotaEspelhoEstadoSeeder::class,
            ClienteSeeder::class,
            ContatoSeeder::class,
            UsuarioSeeder::class,
            EnderecoSeeder::class,
            //TipoPatrimonioSeeder::class,
            PatrimonioSeeder::class,
            LicencaSeeder::class,
            ContratoSeeder::class,
            PedidoSeeder::class,
            // CompraSeeder::class,
            ChamadoSeeder::class,
            PatrimonioAlugadoSeeder::class,
            NotaSeeder::class,
            NotaEspelhoSeeder::class,
            FichaSeeder::class,
            ExpedicaoTipoSeeder::class,
            LancamentoFuturoSeeder::class,
            CobrancaSeeder::class,
            ClienteProcessoSeeder::class,
            NotaSerasaSeeder::class,
            ReajusteContratoSeeder::class,
        ]);
    }
}
