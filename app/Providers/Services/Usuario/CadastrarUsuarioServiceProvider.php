<?php

namespace App\Providers\Services\Usuario;

use App\Repositories\Contracts\UsuarioRepository;
use App\Services\Usuario\CadastrarUsuario\CadastrarUsuarioService;
use App\Services\Usuario\CadastrarUsuario\Contracts\CadastrarUsuarioService as ContractsCadastrarUsuarioService;
use Illuminate\Support\ServiceProvider;

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

        $this->app->bind(ContractsCadastrarUsuarioService::class, function($app) use($service){
            return $service;
        });
    }
}
