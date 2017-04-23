<?php

namespace apiPoseidon\Transformers;

use League\Fractal\TransformerAbstract;
use apiPoseidon\Models\City;

/**
 * Class CityTransformer
 * @package namespace apiPoseidon\Transformers;
 */
class CityTransformer extends TransformerAbstract
{

    /**
     * Transform the \City entity
     * @param \City $model
     *
     * @return array
     */
    public function transform(City $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
