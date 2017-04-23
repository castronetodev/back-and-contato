<?php

namespace apiPoseidon\Presenters;

use apiPoseidon\Transformers\CityTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CityPresenter
 *
 * @package namespace apiPoseidon\Presenters;
 */
class CityPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CityTransformer();
    }
}
