<?php

namespace apiPoseidon\Transformers;

use League\Fractal\TransformerAbstract;
use apiPoseidon\Models\Picture;

/**
 * Class PictureTransformer
 * @package namespace apiPoseidon\Transformers;
 */
class PictureTransformer extends TransformerAbstract
{

    /**
     * Transform the \Picture entity
     * @param \Picture $model
     *
     * @return array
     */
    public function transform(Picture $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
