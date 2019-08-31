<?php

namespace App\Repositories;

use App\Models\Cidade;
use App\Repositories\BaseRepository;

/**
 * Class CidadeRepository.
 * @version August 30, 2019, 9:38 pm -03
 */
class CidadeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
    ];

    /**
     * Return searchable fields.
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model.
     **/
    public function model()
    {
        return Cidade::class;
    }

    /**
     * Retorna um array de Cidades no formato [id => 'nome'].
     *
     * @param mixed $estadoId - Para obter o array de cidades de 1 estado.
     *
     * @return array
     */
    public function getArrayParaSelect($estadoId = null)
    {
        //Se vier estadoId, filtrar antes do pluck
        if ($estadoId) {
            return $this->model()
                ::where('estado_id', $estadoId)
                ->pluck('nome', 'id')
                ->all();
        }

        return $this->model()
            ::pluck('nome', 'id')
            ->all();
    }
}
