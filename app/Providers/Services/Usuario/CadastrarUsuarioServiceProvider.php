<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Usuario;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\UsuarioRepository;
use App\Services\Usuario\CadastrarUsuario\CadastrarUsuarioService;
use App\Services\Usuario\CadastrarUsuario\Contracts\CadastrarUsuarioService as ContractsCadastrarUsuarioService;

class CadastrarUsuarioServiceProvider extends ServiceProvider
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
        $service = new CadastrarUsuarioService();
        $service->setUsuarioRepository(app(UsuarioRepository::class));

        $this->app->bind(ContractsCadastrarUsuarioService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
