<?php

namespace App\Repositories;

use App\Models\Cidade;
use App\Repositories\BaseRepository;

/**
 * Class CidadeRepository
 * @package App\Repositories
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Cidade::class;
    }

    /**
     * undocumented function
     *
     * @return void
     */
    public function getArrayParaSelect()
    {
        return $this->model()::pluck('nome', 'id')->all();
    }




}
