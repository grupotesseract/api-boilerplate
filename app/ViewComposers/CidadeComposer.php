<?php

namespace App\ViewComposers;

use Illuminate\View\View;
use App\Repositories\CidadeRepository;

class CidadeComposer
{
    protected $cidadeRepository;

    /**
     * __construct.
     *
     * @param CidadeRepository $cidadeRepository
     */
    public function __construct(CidadeRepository $cidadeRepository)
    {
        // Dependencies automatically resolved by service container...
        $this->cidadeRepository = $cidadeRepository;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('cidades', $this->cidadeRepository->getArrayParaSelect());
    }
}
