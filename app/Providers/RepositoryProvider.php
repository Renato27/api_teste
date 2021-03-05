<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Repositories\Contracts\ClienteRepository::class, function ($app) {
            return new \App\Repositories\ClienteRepositoryImplementation(new \App\Models\Clientes\Cliente());
        });

        $this->app->bind(\App\Repositories\Contracts\ClienteContatoRepository::class, function ($app) {
            return new \App\Repositories\ClienteContatoRepositoryImplementation(new \App\Models\ClienteContato\ClienteContato());
        });

        $this->app->bind(\App\Repositories\Contracts\ClienteContratoRepository::class, function ($app) {
            return new \App\Repositories\ClienteContratoRepositoryImplementation(new \App\Models\ClienteContrato\ClienteContrato());
        });

        $this->app->bind(\App\Repositories\Contracts\ClienteEnderecoRepository::class, function ($app) {
            return new \App\Repositories\ClienteEnderecoRepositoryImplementation(new \App\Models\ClienteEndereco\ClienteEndereco());
        });

        $this->app->bind(\App\Repositories\Contracts\ContatoContratoRepository::class, function ($app) {
            return new \App\Repositories\ContatoContratoRepositoryImplementation(new \App\Models\ContatoContrato\ContatoContrato());
        });

        $this->app->bind(\App\Repositories\Contracts\ContatoEmailRepository::class, function ($app) {
            return new \App\Repositories\ContatoEmailRepositoryImplementation(new \App\Models\ContatoEmail\ContatoEmail());
        });
        $this->app->bind(\App\Repositories\Contracts\ContatoEnderecosRepository::class, function ($app) {
            return new \App\Repositories\ContatoEnderecosRepositoryImplementation(new \App\Models\ContatoEnderecos\ContatoEnderecos());
        });
        $this->app->bind(\App\Repositories\Contracts\ContatoRepository::class, function ($app) {
            return new \App\Repositories\ContatoRepositoryImplementation(new \App\Models\Contato\Contato());
        });
        $this->app->bind(\App\Repositories\Contracts\ContatoTipoRepository::class, function ($app) {
            return new \App\Repositories\ContatoTipoRepositoryImplementation(new \App\Models\ContatoTipo\ContatoTipo());
        });
        $this->app->bind(\App\Repositories\Contracts\ContratoPedidoRepository::class, function ($app) {
            return new \App\Repositories\ContratoPedidoRepositoryImplementation(new \App\Models\ContratoPedido\ContratoPedido());
        });
        $this->app->bind(\App\Repositories\Contracts\ContratosRepository::class, function ($app) {
            return new \App\Repositories\ContratosRepositoryImplementation(new \App\Models\Contratos\Contrato());
        });
        $this->app->bind(\App\Repositories\Contracts\ContratoTipoRepository::class, function ($app) {
            return new \App\Repositories\ContratoTipoRepositoryImplementation(new \App\Models\ContratoTipo\ContratoTipo());
        });
        $this->app->bind(\App\Repositories\Contracts\EnderecoFuncionarioRepository::class, function ($app) {
            return new \App\Repositories\EnderecoFuncionarioRepositoryImplementation(new \App\Models\EnderecoFuncionario\EnderecoFuncionario());
        });
        $this->app->bind(\App\Repositories\Contracts\EnderecoRepository::class, function ($app) {
            return new \App\Repositories\EnderecoRepositoryImplementation(new \App\Models\Endereco\Endereco());
        });
        $this->app->bind(\App\Repositories\Contracts\FuncionarioEnderecoRepository::class, function ($app) {
            return new \App\Repositories\FuncionarioEnderecoRepositoryImplementation(new \App\Models\FuncionarioEndereco\FuncionarioEndereco());
        });
        $this->app->bind(\App\Repositories\Contracts\FuncionarioRepository::class, function ($app) {
            return new \App\Repositories\FuncionarioRepositoryImplementation(new \App\Models\Funcionario\Funcionario());
        });
        $this->app->bind(\App\Repositories\Contracts\ItemPedidoRepository::class, function ($app) {
            return new \App\Repositories\ItemPedidoRepositoryImplementation(new \App\Models\ItemPedido\ItemPedido());
        });
        $this->app->bind(\App\Repositories\Contracts\MedicaoTipoRepository::class, function ($app) {
            return new \App\Repositories\MedicaoTipoRepositoryImplementation(new \App\Models\MedicaoTipo\MedicaoTipo());
        });
        $this->app->bind(\App\Repositories\Contracts\PagamentoMetodoRepository::class, function ($app) {
            return new \App\Repositories\PagamentoMetodoRepositoryImplementation(new \App\Models\PagamentoMetodo\PagamentoMetodo());
        });
        $this->app->bind(\App\Repositories\Contracts\PedidoItemRepository::class, function ($app) {
            return new \App\Repositories\PedidoItemRepositoryImplementation(new \App\Models\PedidoItem\PedidoItem());
        });
        $this->app->bind(\App\Repositories\Contracts\PedidoRepository::class, function ($app) {
            return new \App\Repositories\PedidoRepositoryImplementation(new \App\Models\Pedido\Pedido());
        });
        $this->app->bind(\App\Repositories\Contracts\StatusPedidoRepository::class, function ($app) {
            return new \App\Repositories\StatusPedidoRepositoryImplementation(new \App\Models\StatusPedido\StatusPedido());
        });
        $this->app->bind(\App\Repositories\Contracts\TipoContatoRepository::class, function ($app) {
            return new \App\Repositories\TipoContatoRepositoryImplementation(new \App\Models\TipoContato\TipoContato());
        });
        $this->app->bind(\App\Repositories\Contracts\TipoContratoRepository::class, function ($app) {
            return new \App\Repositories\TipoContratoRepositoryImplementation(new \App\Models\TipoContrato\TipoContrato());
        });
        $this->app->bind(\App\Repositories\Contracts\UsuarioRepository::class, function ($app) {
            return new \App\Repositories\UsuarioRepositoryImplementation(new \App\Models\Usuario\Usuario());
        });
        $this->app->bind(\App\Repositories\Contracts\ExpedicaoRepository::class, function ($app) {
            return new \App\Repositories\ExpedicaoRepositoryImplementation(new \App\Models\Expedicao\Expedicao());
        });
        $this->app->bind(\App\Repositories\Contracts\EntregaRepository::class, function ($app) {
            return new \App\Repositories\EntregaRepositoryImplementation(new \App\Models\Entrega\Entrega());
        });
        $this->app->bind(\App\Repositories\Contracts\EntregaPatrimonioRepository::class, function ($app) {
            return new \App\Repositories\EntregaPatrimonioRepositoryImplementation(new \App\Models\EntregaPatrimonio\EntregaPatrimonio());
        });
        $this->app->bind(\App\Repositories\Contracts\NotaEspelhoRepository::class, function ($app) {
            return new \App\Repositories\NotaEspelhoRepositoryImplementation(new \App\Models\NotaEspelho\NotaEspelho());
        });
        $this->app->bind(\App\Repositories\Contracts\ChamadoRepository::class, function ($app) {
            return new \App\Repositories\ChamadoRepositoryImplementation(new \App\Models\Chamado\Chamado());
        });
        $this->app->bind(\App\Repositories\Contracts\PatrimonioAlugadoRepository::class, function ($app) {
            return new \App\Repositories\PatrimonioAlugadoRepositoryImplementation(new \App\Models\PatrimonioAlugado\PatrimonioAlugado());
        });
        $this->app->bind(\App\Repositories\Contracts\FichaRepository::class, function ($app) {
            return new \App\Repositories\FichaRepositoryImplementation(new \App\Models\Ficha\Ficha());
        });
        $this->app->bind(\App\Repositories\Contracts\AberturaContadorRepository::class, function ($app) {
            return new \App\Repositories\AberturaContadorRepositoryImplementation(new \App\Models\AberturaContador\AberturaContador());
        });
        $this->app->bind(\App\Repositories\Contracts\AberturaContadorPatrimonioRepository::class, function ($app) {
            return new \App\Repositories\AberturaContadorPatrimonioRepositoryImplementation(new \App\Models\AberturaContadorPatrimonio\AberturaContadorPatrimonio());
        });
    }
}
