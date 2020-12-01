<?php

namespace App\Services\Clientes\CadastrarCliente;

use App\Models\Clientes\Cliente;
use App\Services\Clientes\CadastrarCliente\Abstracts\CadastrarClienteServiceAbstract;
use Illuminate\Support\Facades\DB;

class CadastrarClienteService extends CadastrarClienteServiceAbstract
{
        /**
     * Processa o cadastro do cliente.
     *
     * @return Cliente
     */
    public function handle() : ?Cliente
    {
        $cliente = null;

        DB::transaction(function () use(&$cliente) {
            
            $cliente =  $this->cadastrarCliente();
            $endereco = $this->cadastrarEnderecoService->setDados($this->dados)->handle();
            $contato = $this->cadastrarContatoService->setDados($this->dados)->handle();

            $this->associarClienteContatoService->setCliente($cliente->id)->setContato($contato->id)->handle();
            $this->associarClienteEnderecoService->setCliente($cliente->id)->setEndereco($endereco->id)->handle();
            
            
        });

        return $cliente;
    }
}
