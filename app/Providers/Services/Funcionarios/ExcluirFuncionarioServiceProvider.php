<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Funcionarios;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\FuncionarioRepository;
use App\Services\Funcionarios\ExcluirFuncionario\ExcluirFuncionarioService;
use App\Services\Funcionarios\ExcluirFuncionario\Contracts\ExcluirFuncionarioService as ContractsExcluirFuncionarioService;

class ExcluirFuncionarioServiceProvider extends ServiceProvider
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
        $service = new ExcluirFuncionarioService();
        $service->setFuncionarioRepository(app(FuncionarioRepository::class));

        $this->app->bind(ContractsExcluirFuncionarioService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
