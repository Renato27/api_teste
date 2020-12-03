<?php

namespace App\Providers\Services\Funcionarios;

use App\Repositories\Contracts\FuncionarioRepository;
use App\Services\Funcionarios\ExcluirFuncionario\Contracts\ExcluirFuncionarioService as ContractsExcluirFuncionarioService;
use App\Services\Funcionarios\ExcluirFuncionario\ExcluirFuncionarioService;
use Illuminate\Support\ServiceProvider;

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

        $this->app->bind(ContractsExcluirFuncionarioService::class, function($app) use($service){
            return $service;
        });
    }
}
