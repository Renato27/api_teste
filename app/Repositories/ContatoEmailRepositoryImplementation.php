<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ContatoEmailRepository;

class ContatoEmailRepositoryImplementation implements ContatoEmailRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna ContatoEmail baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getContatoEmail(int $contato): ?Model
    {
        return $this->where(['contato_id' => $contato])->first();
    }

    /**
     * Retorna uma coleção de ContatoEmail baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getContatoEmails(int $contato): ?Collection
    {
        return $this->where(['contato_id' => $contato])->get();
    }

    /**
     * Cria um novo ContatoEmail.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContatoEmail(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ContatoEmail.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContatoEmail(int $contato, array $detalhes): ?Model
    {
        $email = $this->where(['contato_id' => $contato])->first();

        return $this->update($email->id, $detalhes);
    }

    /**
     * Deleta um ContatoEmail.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContatoEmail(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }

    /**
     * Verifica se o email cadastrado para o usuário pertence à algum contrato, caso não pertença a um contato, faz a criação.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function usuarioTemEmailContato(int $contatoId, string $usuarioEmail): bool
    {
        $contatoEmails = $this->getContatoEmails($contatoId);
        foreach ($contatoEmails as $email) {
            if ($email == $usuarioEmail) {
                return false;
            }
        }

        $this->createContatoEmail([
            'email' => $usuarioEmail,
            'principal' => 0,
            'contato_id' => $contatoId,
        ]);

        return true;
    }
}
