<?php

namespace App\Http\Controllers;

use App\Repositories\CidadeRepository;
use App\Http\Controllers\AppBaseController;

class CidadeController extends AppBaseController
{
    /** @var  CidadeRepository */
    private $cidadeRepository;

    public function __construct(CidadeRepository $cidadeRepo)
    {
        $this->cidadeRepository = $cidadeRepo;
    }

    /**
     * undocumented function
     *
     * @return void
     */
    public function getPorEstado($estadoId)
    {
        $cidades = $this->cidadeRepository->getArrayParaSelect($estadoId);
        return $this->sendResponse($cidades, 'Cidades por estado');
    }


}
