<?php

namespace App\Providers\Services\Funcionarios;

use App\Repositories\Contracts\FuncionarioRepository;
use App\Services\Funcionarios\CadastrarFuncionario\CadastrarFuncionarioService;
use App\Services\Funcionarios\CadastrarFuncionario\Contracts\CadastrarFuncionarioService as ContractsCadastrarFuncionarioService;
use Illuminate\Support\ServiceProvider;

class CadastrarFuncionarioServiceProvider extends ServiceProvider
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
        $service = new CadastrarFuncionarioService();
        $service->setFuncionarioRepository(app(FuncionarioRepository::class));

        $this->app->bind(ContractsCadastrarFuncionarioService::class, function($app) use($service){
            return $service;
        });
    }
}
