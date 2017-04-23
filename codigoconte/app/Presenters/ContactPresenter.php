<?php

namespace apiPoseidon\Presenters;

use apiPoseidon\Transformers\ContactTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ContactPresenter
 *
 * @package namespace apiPoseidon\Presenters;
 */
class ContactPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ContactTransformer();
    }
}
