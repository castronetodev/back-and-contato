<?php

namespace apiPoseidon\Transformers;

use League\Fractal\TransformerAbstract;
use apiPoseidon\Models\Command;

/**
 * Class CommandTransformer
 * @package namespace apiPoseidon\Transformers;
 */
class CommandTransformer extends TransformerAbstract
{

    /**
     * Transform the \Command entity
     * @param \Command $model
     *
     * @return array
     */
    public function transform(Command $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
