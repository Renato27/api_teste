<?php

namespace App\Mail;

use App\Models\Auditoria\Auditoria;
use App\Models\Corretiva\Corretiva;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Preventiva\Preventiva;
use App\Models\Retirada\Retirada;
use App\Models\Suprimento\Suprimento;
use App\Models\Troca\Troca;
use App\Models\Usuario\Usuario;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GenericEnvioEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $model;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->model instanceof Usuario){
            return $this->from('sgl@logicatecnologia.com.br')
                ->subject('Envio de Usuário e Senha')
                ->view('email.cadastro_usuario.corpo')
                ->with(['usuario' => $this->model]);
        }

        elseif($this->model instanceof Retirada){
            return $this->from('sgl@logicatecnologia.com.br')
                ->subject('Envio de Chamado de Retirada')
                ->view('email.chamado.encerramento.retirada.corpo')
                ->with(['retirada' => $this->model]);
        }

        elseif($this->model instanceof Preventiva){
            return $this->from('sgl@logicatecnologia.com.br')
                ->subject('Envio de Chamado de Preventiva')
                ->view('email.chamado.encerramento.preventiva.corpo')
                ->with(['preventiva' => $this->model]);
        }

        elseif($this->model instanceof Corretiva){
            return $this->from('sgl@logicatecnologia.com.br')
                ->subject('Envio de Chamado de Corretiva')
                ->view('email.chamado.encerramento.corretiva.corpo')
                ->with(['corretiva' => $this->model]);
        }

        // Verificar se precisa para encerramento
        elseif($this->model instanceof Auditoria){
            return $this->from('sgl@logicatecnologia.com.br')
                ->subject('Envio de Chamado de Auditoria')
                ->view('email.cadastro_usuario.corpo')
                ->with(['auditoria' => $this->model]);
        }

        elseif($this->model instanceof Troca){
            // return $this->from('wallacegcorrea@gmail.com')
                // ->subject('Envio de Usuário e Senha')
                // ->view('email.cadastro_usuario.corpo')
                // ->with(['troca' => $this->model]);
        }

        // Esta vazio no sgl
        elseif($this->model instanceof Suprimento){
            return $this->from('sgl@logicatecnologia.com.br')
                ->subject('Envio de Chamado de Suprimento')
                ->view('email.cadastro_usuario.corpo')
                ->with(['suprimento' => $this->model]);
        }

        // Verificar Interações
        // elseif($this->model instanceof Suprimento){
        //     return $this->from('sgl@logicatecnologia.com.br')
        //         ->subject('Envio de Chamado de Suprimento')
        //         ->view('email.chamado.interacoes.corpo')
        //         ->with(['usuario' => $this->model]);
        // }
    }
}
