<?php

namespace Database\Seeders;

use App\Models\EnderecoFuncionario\EnderecoFuncionario;
use App\Models\Funcionario\Funcionario;
use App\Models\FuncionarioEndereco\FuncionarioEndereco;
use App\Models\Usuario\Usuario;
use App\Models\UsuarioCliente\UsuarioCliente;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = DB::connection('mysql2')->table('usuarios')->get();
        $funcionarios = DB::connection('mysql2')->table('funcionarios')->get();

        foreach($funcionarios as $funcionario){

            if($funcionario->desligado == 1){
                Funcionario::create([
                    'id'    => $funcionario->idfuncionarios,
                    'nome'  => $funcionario->nome,
                    'cargo' => null,
                    'telefone' => $funcionario->celular,
                    'rg'    => $funcionario->rg,
                    'cpf'   => $funcionario->cpf,
                    'titulo_eleitor'    => $funcionario->tituloEleitor,
                    'secao_titulo_eleitor'  => $funcionario->secaoTituloEleitor,
                    'ctps'  => $funcionario->ctps,
                    'email' => $funcionario->emailPessoal,
                    'deleted_at'    => Carbon::now()
                ]);

                EnderecoFuncionario::create([
                    'rua'   => $funcionario->endereco,
                    'numero' => null,
                    'bairro'  => $funcionario->bairro,
                    'complemento'   => null,
                    'cidade'    => null,
                    'cep'   => $funcionario->cep,
                    'deleted_at'    => Carbon::now()
                ]);
    
            }else{

                $funcionario = Funcionario::create([
                    'id'    => $funcionario->idfuncionarios,
                    'nome'  => $funcionario->nome,
                    'cargo' => null,
                    'telefone' => $funcionario->celular,
                    'rg'    => $funcionario->rg,
                    'cpf'   => $funcionario->cpf,
                    'titulo_eleitor'    => $funcionario->tituloEleitor,
                    'secao_titulo_eleitor'  => $funcionario->secaoTituloEleitor,
                    'ctps'  => $funcionario->ctps,
                    'email' => $funcionario->emailPessoal,
                  
                ]);

                $enderecoFuncionario = EnderecoFuncionario::create([
                    'rua'   => $funcionario->endereco,
                    'numero' => null,
                    'bairro'  => $funcionario->bairro,
                    'complemento'   => null,
                    'cidade'    => null,
                    'cep'   => $funcionario->cep,
                   
                ]);

                FuncionarioEndereco::create([
                    'funcionario_id' => $funcionario->id,
                    'endereco_funcionario_id' => $enderecoFuncionario->id,
                ]);
            }          
        }
       

        foreach($usuarios as $usuario){

            if(!is_null($usuario->funcionarios_idfuncionarios)){
                $funcionario = DB::connection('mysql2')->table('funcionarios')->where('idfuncionarios', $usuario->funcionarios_idfuncionarios)->first();
                if($funcionario->desligado == 1){
                    Usuario::create([
                        'id'            => $usuario->idusuarios,
                        'email'         => $usuario->email,
                        'password'      => $usuario->senha,
                        'tipo_usuario_id'   => $usuario->tipousuario_idtipousuario,
                        'funcionario_id'    => $usuario->funcionarios_idfuncionarios,
                        'contato_id'        => $usuario->contatos_idcontatos,
                        'deleted_at'    => Carbon::now()
                    ]);
                }else{
                    Usuario::create([
                        'id'            => $usuario->idusuarios,
                        'email'         => $usuario->email,
                        'password'      => $usuario->senha,
                        'tipo_usuario_id'   => $usuario->tipousuario_idtipousuario,
                        'funcionario_id'    => $usuario->funcionarios_idfuncionarios,
                        'contato_id'        => $usuario->contatos_idcontatos
                    ]);
                }
            }else{
                $usuario1 = Usuario::create([
                    'id'            => $usuario->idusuarios,
                    'email'         => $usuario->email,
                    'password'      => $usuario->senha,
                    'tipo_usuario_id'   => $usuario->tipousuario_idtipousuario,
                    'funcionario_id'    => $usuario->funcionarios_idfuncionarios,
                    'contato_id'        => $usuario->contatos_idcontatos
                ]);

                if(!is_null($usuario->clientes_idclientes)){
                    UsuarioCliente::create([
                        'cliente_id' => $usuario->clientes_idclientes, 
                        'usuario_id' => $usuario1->id
                    ]);
                }
            }
        }
    }
}
