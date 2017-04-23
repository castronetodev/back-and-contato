<?php

namespace apiPoseidon\Presenters;

use apiPoseidon\Transformers\MenuTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class MenuPresenter
 *
 * @package namespace apiPoseidon\Presenters;
 */
class MenuPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new MenuTransformer();
    }
}
