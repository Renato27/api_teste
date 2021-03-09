<?php

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
            ExpedicaoTipoSeeder::class,
            NotaEspelhoEstadoSeeder::class,
            ClienteSeeder::class,
            ContatoSeeder::class,
            UsuarioSeeder::class,
            EnderecoSeeder::class,
            //TipoPatrimonioSeeder::class,
            PatrimonioSeeder::class,
            ChamadoSeeder::class,

        ]);
    }
}
