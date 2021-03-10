<?php

namespace App\Observers;

use App\Models\ContatoEmail\ContatoEmail;

class ContatoUsuarioEmailObserver
{
    /**
     * Handle the ContatoEmail "created" event.
     *
     * @param  \App\Models\ContatoEmail  $contatoEmail
     * @return void
     */
    public function created(ContatoEmail $contatoEmail)
    {
        //
    }

    /**
     * Handle the ContatoEmail "updated" event.
     *
     * @param  \App\Models\ContatoEmail  $contatoEmail
     * @return void
     */
    public function updated(ContatoEmail $contatoEmail)
    {
        //
    }

    /**
     * Handle the ContatoEmail "deleted" event.
     *
     * @param  \App\Models\ContatoEmail  $contatoEmail
     * @return void
     */
    public function deleted(ContatoEmail $contatoEmail)
    {
        //
    }

    /**
     * Handle the ContatoEmail "restored" event.
     *
     * @param  \App\Models\ContatoEmail  $contatoEmail
     * @return void
     */
    public function restored(ContatoEmail $contatoEmail)
    {
        //
    }

    /**
     * Handle the ContatoEmail "force deleted" event.
     *
     * @param  \App\Models\ContatoEmail  $contatoEmail
     * @return void
     */
    public function forceDeleted(ContatoEmail $contatoEmail)
    {
        //
    }
}
