<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Funcionarios;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\FuncionarioRepository;
use App\Services\Funcionarios\AtualizarFuncionario\AtualizarFuncionarioService;
use App\Services\Funcionarios\AtualizarFuncionario\Contracts\AtualizarFuncionarioService as ContractsAtualizarFuncionarioService;

class AtualizarFuncionarioServiceProvider extends ServiceProvider
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
        $service = new AtualizarFuncionarioService();
        $service->setFuncionarioRepository(app(FuncionarioRepository::class));

        $this->app->bind(ContractsAtualizarFuncionarioService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
