<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Funcionarios;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\FuncionarioRepository;
use App\Services\Funcionarios\CadastrarFuncionario\CadastrarFuncionarioService;
use App\Services\Funcionarios\CadastrarFuncionario\Contracts\CadastrarFuncionarioService as ContractsCadastrarFuncionarioService;

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

        $this->app->bind(ContractsCadastrarFuncionarioService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
