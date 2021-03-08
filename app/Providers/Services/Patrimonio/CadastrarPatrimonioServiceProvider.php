<?php

namespace App\Providers\Services\Patrimonio;

use App\Repositories\Contracts\PatrimonioRepository;
use App\Services\Patrimonio\CadastrarPatrimonio\CadastrarPatrimonioService;
use App\Services\Patrimonio\CadastrarPatrimonio\Contracts\CadastrarPatrimonioService as ContractsCadastrarPatrimonioService;
use Illuminate\Support\ServiceProvider;

class CadastrarPatrimonioServiceProvider extends ServiceProvider
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
        $service = new CadastrarPatrimonioService();

        $service->setPatrimonioRepository(app(PatrimonioRepository::class));

        $this->app->bind(ContractsCadastrarPatrimonioService::class, function($app) use($service){
            return $service;
        });
    }
}
