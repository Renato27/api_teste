<?php

namespace Database\Seeders;

use App\Models\Auditoria\Auditoria;
use App\Models\AuditoriaPatrimonio\AuditoriaPatrimonio;
use App\Models\Chamado\Chamado;
use App\Models\ChamadoArquivo\ChamadoArquivo;
use App\Models\Contador\Contador;
use App\Models\ContadorPatrimonios\ContadorPatrimonios;
use App\Models\Corretiva\Corretiva;
use App\Models\CorretivaPatrimonio\CorretivaPatrimonio;
use App\Models\Entrega\Entrega;
use App\Models\EntregaPatrimonio\EntregaPatrimonio;
use App\Models\Preventiva\Preventiva;
use App\Models\PreventivaPatrimonio\PreventivaPatrimonio;
use App\Models\Retirada\Retirada;
use App\Models\RetiradaPatrimonio\RetiradaPatrimonio;
use App\Models\Suporte\Suporte;
use App\Models\SuporteInteracao\SuporteInteracao;
use App\Models\Suprimento\Suprimento;
use App\Models\SuprimentoPatrimonio\SuprimentoPatrimonio;
use App\Models\Troca\Troca;
use App\Models\TrocaPatrimonio\TrocaPatrimonio;
use App\Models\TrocaPatrimonioRetirada\TrocaPatrimonioRetirada;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChamadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chamados = DB::connection('mysql2')->table('chamados')
        ->get();

        foreach($chamados as $chamado){

            Chamado::create([
                'id'            => $chamado->idchamados,
                'data_acao'     => $chamado->dataAcao,
                'mensagem'      => $chamado->mensagem,
                'cliente_id'    => $chamado->clientes_idclientes,
                'status_chamado_id' => $chamado->statuschamado_idstatuschamado,
                'tipo_chamado_id'   => $chamado->tipochamado_idtipochamado,
                'usuario_id'        => $chamado->usuarios_idusuarios,
                'pedido_id'         => $chamado->vendas_idvendas,
                'contato_id'        => $chamado->contatos_idcontatos,
                'endereco_id'       => $chamado->enderecos_idenderecos,
                'created_at'        => $chamado->created

            ]);

            if(!is_null($chamado->arquivo)){
                ChamadoArquivo::create([
                    'arquivo'   => $chamado->arquivo,
                    'chamado_id'    => $chamado->idchamados,
                    'usuario_id'    => $chamado->usuarios_idusuarios
                ]);
            }


            if(!is_null($chamado->arquivo_cliente)){
                ChamadoArquivo::create([
                    'arquivo'   => $chamado->arquivo_cliente,
                    'chamado_id'    => $chamado->idchamados,
                    'usuario_id'    => $chamado->usuarios_idusuarios
                ]);
            }

            if($chamado->statuschamado_idstatuschamado == 6){

                switch ($chamado->tipochamado_idtipochamado) {
                    case 1:
                        $entregas = DB::connection('mysql2')
                        ->select("select * from entregas left join pedidos as p on p.idpedidos = entregas.pedido_id  where chamados_idchamados = ?", [$chamado->idchamados]);

                        $entrega1 = Entrega::create([
                            'chamado_id'    => $chamado->idchamados,
                            'expedicao_id'  => null,
                            'deleted_at' => Carbon::now(),
                        ]);
                        foreach ($entregas as $entrega) {
                            EntregaPatrimonio::create([
                                'entrega_id'  => $entrega1->id,
                                'patrimonio_id' => $entrega->patrimonios_idpatrimonios,
                                'item_pedido_id' => null,
                                'checked' => 1,
                                'deleted_at' => Carbon::now(),
                            ]);
                        }
                        break;
                    case 2:
                        $retiradas = DB::connection('mysql2')
                        ->select("select * from retiradas where chamados_idchamados = ?", [$chamado->idchamados]);

                        $retirada1 = Retirada::create([
                            'chamado_id'    => $chamado->idchamados,
                            'deleted_at' => Carbon::now(),
                        ]);
                        foreach ($retiradas as $retirada) {
                            RetiradaPatrimonio::create([
                                'retirada_id' => $retirada1->id,
                                'patrimonio_id' => $retirada->patrimonios_idpatrimonios,
                                'checked' => 1,
                                'deleted_at' => Carbon::now(),
                            ]);
                        }

                        break;
                    case 3:
                        $preventivas = DB::connection('mysql2')
                        ->select("select * from preventivas where chamados_idchamados = ?", [$chamado->idchamados]);

                        $preventiva1 = Preventiva::create([
                            'chamado_id'    => $chamado->idchamados,
                            'deleted_at' => Carbon::now(),
                        ]);
                        foreach($preventivas as $preventiva){

                            PreventivaPatrimonio::create([
                                'preventiva_id' => $preventiva1->id,
                                'patrimonio_id' => $preventiva->patrimonios_idpatrimonios,
                                'deleted_at' => Carbon::now(),
                            ]);
                        }

                        break;
                    case 4:

                        $contadores = DB::connection('mysql2')
                        ->select("select * from verificacao_contador where chamados_idchamados = ?", [$chamado->idchamados]);

                        $contador1 = Contador::create([
                            'chamado_id'    => $chamado->idchamados,
                            'deleted_at' => Carbon::now(),
                        ]);

                            foreach($contadores as $contador){

                                ContadorPatrimonios::create([
                                    'contador_id' => $contador1->id,
                                    'patrimonio_id' => $contador->patrimonios_idpatrimonios,
                                    'valor' => $contador->contador,
                                    'deleted_at' => Carbon::now(),
                                ]);
                            }

                        break;
                    case 5:

                        $corretivas = DB::connection('mysql2')
                        ->select("select * from patrimonios_suporte where chamados_idchamados = ?", [$chamado->idchamados]);

                        $corretiva1 = Corretiva::create([
                            'chamado_id'    => $chamado->idchamados,
                            'deleted_at' => Carbon::now(),
                        ]);

                        foreach($corretivas as $corretiva){
                            CorretivaPatrimonio::create([
                                'corretiva_id' => $corretiva1->id,
                                'patrimonio_id' => $corretiva->patrimonios_idpatrimonios,
                                'deleted_at' => Carbon::now(),
                            ]);

                            // if(!is_null($corretiva->id_team_viewer) && !is_null($corretiva->senha_team_viewer)){
                            //     $corretiva2 = Corretiva::where('chamado_id', $chamado->idchamados)->first();
                            //     $corretiva2->login_team_viewer = $corretiva->id_team_viewer;
                            //     $corretiva2->senha_team_viewer = $corretiva->senha_team_viewer;
                            //     $corretiva2->save();
                            // }
                        }
                        break;
                    case 6:

                        $suprimentos = DB::connection('mysql2')
                        ->select("select * from patrimonios_suporte where chamados_idchamados = ?", [$chamado->idchamados]);

                        $suprimento1 = Suprimento::create([
                            'chamado_id'    => $chamado->idchamados,
                            'deleted_at' => Carbon::now(),
                        ]);

                        foreach($suprimentos as $suprimento){
                            SuprimentoPatrimonio::create([
                                'suprimento_id' => $suprimento1->id,
                                'patrimonio_id' => $suprimento->patrimonios_idpatrimonios,
                                'deleted_at' => Carbon::now(),
                            ]);
                        }

                        break;
                    case 7:

                        $tarefas = DB::connection('mysql2')
                        ->select("select * from tarefas inner join interacoes as i on i.tarefas_idtarefas = tarefas.idtarefas where chamados_idchamados = ?", [$chamado->idchamados]);

                        $suporte = Suporte::create([
                            'chamado_id'    => $chamado->idchamados,
                            'deleted_at' => Carbon::now(),
                        ]);

                        foreach ($tarefas as $tarefa) {
                            SuporteInteracao::create([
                                'inicio' => $tarefa->inicio,
                                'fim'   => $tarefa->fim,
                                'detalhes'  => $tarefa->detalhes,
                                'suporte_id' => $suporte->id,
                                'usuario_id'    => $tarefa->usuarios_idusuarios,
                                'deleted_at' => Carbon::now(),

                            ]);

                            // if(!is_null($suporte->id_team_viewer) && !is_null($suporte->senha_team_viewer)){
                            //     $suporte2 = Suporte::where('chamado_id', $chamado->idchamados)->first();
                            //     $suporte2->login_team_viewer = $suporte->id_team_viewer;
                            //     $suporte2->senha_team_viewer = $suporte->senha_team_viewer;
                            //     $suporte2->save();
                            // }
                        }
                        break;
                    case 8:

                        $entregas = DB::connection('mysql2')
                        ->select("select * from entregas left join pedidos as p on p.idpedidos = entregas.pedido_id  where chamados_idchamados = ?", [$chamado->idchamados]);

                        $retiradas = DB::connection('mysql2')
                        ->select("select * from retiradas where chamados_idchamados = ?", [$chamado->idchamados]);

                        $troca = Troca::create([
                            'chamado_id'    => $chamado->idchamados,
                            'deleted_at' => Carbon::now(),
                        ]);

                        foreach($entregas as $entrega){
                            TrocaPatrimonio::create([
                                'troca_id'      => $troca->id,
                                'patrimonio_id' => $entrega->patrimonios_idpatrimonios,
                                'item_pedido_id' => $entrega->pedido_definido_id,
                                'checked' => 1,
                                'deleted_at' => Carbon::now(),
                            ]);
                        }

                        foreach($retiradas as $retirada){
                            TrocaPatrimonioRetirada::create([
                                'troca_id'  => $troca->id,
                                'patrimonio_id' => $retirada->patrimonios_idpatrimonios,
                                'item_pedido_id' => null,
                                'checked' => 1,
                                'deleted_at' => Carbon::now(),
                            ]);
                        }

                        break;
                    case 9:

                        $auditorias = DB::connection('mysql2')
                        ->select("select * from patrimonio_auditorias where chamado_id = ?", [$chamado->idchamados]);

                        $auditoria1 = Auditoria::create([
                            'chamado_id'    => $chamado->idchamados,
                            'deleted_at' => Carbon::now(),
                        ]);

                        foreach($auditorias as $auditoria){
                            AuditoriaPatrimonio::create([
                                'auditoria_id' => $auditoria1->id,
                                'patrimonio_id' => $auditoria->patrimonio_id,
                                'deleted_at' => Carbon::now(),
                            ]);
                        }

                        break;

            };
        }else{
                switch ($chamado->tipochamado_idtipochamado) {
                    case 1:
                        $entregas = DB::connection('mysql2')
                        ->select("select * from entregas left join pedidos as p on p.idpedidos = entregas.pedido_id  where chamados_idchamados = ?", [$chamado->idchamados]);

                        $entrega1 = Entrega::create([
                            'chamado_id'    => $chamado->idchamados,
                            'expedicao_id'  => null,
                        ]);
                        foreach ($entregas as $entrega) {
                            EntregaPatrimonio::create([
                                'entrega_id'  => $entrega1->id,
                                'patrimonio_id' => $entrega->patrimonios_idpatrimonios,
                                'item_pedido_id' => $entrega->pedido_definido_id,
                                'checked' => 1,
                            ]);
                        }
                        break;
                    case 2:
                        $retiradas = DB::connection('mysql2')
                        ->select("select * from retiradas where chamados_idchamados = ?", [$chamado->idchamados]);

                        $retirada1 = Retirada::create([
                            'chamado_id'    => $chamado->idchamados,
                        ]);
                        foreach ($retiradas as $retirada) {
                            RetiradaPatrimonio::create([
                                'retirada_id' => $retirada1->id,
                                'patrimonio_id' => $retirada->patrimonios_idpatrimonios,
                                'checked' => 1,
                            ]);
                        }

                        break;
                    case 3:
                        $preventivas = DB::connection('mysql2')
                        ->select("select * from preventivas where chamados_idchamados = ?", [$chamado->idchamados]);

                        $preventiva1 = Preventiva::create([
                            'chamado_id'    => $chamado->idchamados,
                        ]);
                        foreach($preventivas as $preventiva){

                            PreventivaPatrimonio::create([
                                'preventiva_id' => $preventiva1->id,
                                'patrimonio_id' => $preventiva->patrimonios_idpatrimonios
                            ]);
                        }

                        break;
                    case 4:

                        $contadores = DB::connection('mysql2')
                        ->select("select * from verificacao_contador where chamados_idchamados = ?", [$chamado->idchamados]);

                        $contador1 = Contador::create([
                            'chamado_id'    => $chamado->idchamados,
                        ]);

                            foreach($contadores as $contador){

                                ContadorPatrimonios::create([
                                    'contador_id' => $contador1->id,
                                    'patrimonio_id' => $contador->patrimonios_idpatrimonios,
                                    'valor' => $contador->contador
                                ]);
                            }

                        break;
                    case 5:

                        $corretivas = DB::connection('mysql2')
                        ->select("select * from patrimonios_suporte where chamados_idchamados = ?", [$chamado->idchamados]);

                        $corretiva1 = Corretiva::create([
                            'chamado_id'    => $chamado->idchamados,
                        ]);

                        foreach($corretivas as $corretiva){
                            CorretivaPatrimonio::create([
                                'corretiva_id' => $corretiva1->id,
                                'patrimonio_id' => $corretiva->patrimonios_idpatrimonios
                            ]);

                            if(!is_null($corretiva->id_team_viewer) && !is_null($corretiva->senha_team_viewer)){
                                $corretiva2 = Corretiva::where('chamado_id', $chamado->idchamados)->first();
                                $corretiva2->login_team_viewer = $corretiva->id_team_viewer;
                                $corretiva2->senha_team_viewer = $corretiva->senha_team_viewer;
                                $corretiva2->save();
                            }
                        }
                        break;
                    case 6:

                        $suprimentos = DB::connection('mysql2')
                        ->select("select * from patrimonios_suporte where chamados_idchamados = ?", [$chamado->idchamados]);

                        $suprimento1 = Suprimento::create([
                            'chamado_id'    => $chamado->idchamados,
                        ]);

                        foreach($suprimentos as $suprimento){
                            SuprimentoPatrimonio::create([
                                'suprimento_id' => $suprimento1->id,
                                'patrimonio_id' => $suprimento->patrimonios_idpatrimonios
                            ]);
                        }

                        break;
                    case 7:

                        $tarefas = DB::connection('mysql2')
                        ->select("select * from tarefas inner join interacoes as i on i.tarefas_idtarefas = tarefas.idtarefas where chamados_idchamados = ?", [$chamado->idchamados]);

                        $suporte = Suporte::create([
                            'chamado_id'    => $chamado->idchamados,
                        ]);

                        foreach ($tarefas as $tarefa) {
                            SuporteInteracao::create([
                                'inicio' => $tarefa->inicio,
                                'fim'   => $tarefa->fim,
                                'detalhes'  => $tarefa->detalhes,
                                'suporte_id' => $suporte->id,
                                'usuario_id'    => $tarefa->usuarios_idusuarios
                            ]);

                            if(!is_null($suporte->id_team_viewer) && !is_null($suporte->senha_team_viewer)){
                                $suporte2 = Suporte::where('chamado_id', $chamado->idchamados)->first();
                                $suporte2->login_team_viewer = $suporte->id_team_viewer;
                                $suporte2->senha_team_viewer = $suporte->senha_team_viewer;
                                $suporte2->save();
                            }
                        }
                        break;
                    case 8:

                        $entregas = DB::connection('mysql2')
                        ->select("select * from entregas left join pedidos as p on p.idpedidos = entregas.pedido_id  where chamados_idchamados = ?", [$chamado->idchamados]);

                        $retiradas = DB::connection('mysql2')
                        ->select("select * from retiradas where chamados_idchamados = ?", [$chamado->idchamados]);

                        $troca = Troca::create([
                            'chamado_id'    => $chamado->idchamados,
                        ]);

                        foreach($entregas as $entrega){
                            TrocaPatrimonio::create([
                                'troca_id'      => $troca->id,
                                'patrimonio_id' => $entrega->patrimonios_idpatrimonios,
                                'item_pedido_id' => $entrega->pedido_definido_id,
                                'checked' => 1
                            ]);
                        }

                        foreach($retiradas as $retirada){
                            TrocaPatrimonioRetirada::create([
                                'troca_id'  => $troca->id,
                                'patrimonio_id' => $retirada->patrimonios_idpatrimonios,
                                'item_pedido_id' => null,
                                'checked' => 1
                            ]);
                        }

                        break;
                    case 9:

                        $auditorias = DB::connection('mysql2')
                        ->select("select * from patrimonio_auditorias where chamado_id = ?", [$chamado->idchamados]);

                        $auditoria1 = Auditoria::create([
                            'chamado_id'    => $chamado->idchamados,
                        ]);

                        foreach($auditorias as $auditoria){
                            AuditoriaPatrimonio::create([
                                'auditoria_id' => $auditoria1->id,
                                'patrimonio_id' => $auditoria->patrimonio_id
                            ]);
                        }

                        break;
            }

            }
        }
    }
}
