<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Listeners;

use App\Events\ClienteEvent;
use App\Models\ClienteContato\ClienteContato;
use App\Models\ClienteEndereco\ClienteEndereco;
use App\Repositories\Contracts\ContatoRepository;
use App\Repositories\Contracts\EnderecoRepository;

class RelationShipsClienteCadastro
{
    /**
     * Undocumented variable.
     *
     * @var EnderecoRepository
     */
    protected EnderecoRepository $enderecoRepository;

    /**
     * Undocumented variable.
     *
     * @var ContatoRepository
     */
    protected ContatoRepository $contatoRepository;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->enderecoRepository = app(EnderecoRepository::class);
        $this->contatoRepository = app(ContatoRepository::class);
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ClienteEvent $event)
    {
        $endereco = $this->enderecoRepository->createEndereco($event->getDadosEndereco());
        $contato = $this->contatoRepository->createContato($event->getDadosContato());

        $endereco->principal = 1;
        $endereco->save();

        $contato->principal = 1;
        $contato->save();

        ClienteContato::create(['cliente_id' => $event->getCliente()->id, 'contato_id' => $contato->id]);
        ClienteEndereco::create(['cliente_id' => $event->getCliente()->id, 'endereco_id' => $endereco->id]);
    }
}
