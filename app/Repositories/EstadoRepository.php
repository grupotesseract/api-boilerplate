<?php

namespace App\Repositories;

use App\Models\Estado;
use App\Repositories\BaseRepository;

/**
 * Class EstadoRepository.
 * @version August 30, 2019, 9:38 pm -03
 */
class EstadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'sigla',
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
        return Estado::class;
    }

    /**
     * Retorna um array de Estados no formato [id => 'nome'].
     *
     * @return array
     */
    public function getArrayParaSelect()
    {
        return $this->model()::pluck('nome', 'id')->all();
    }
}
