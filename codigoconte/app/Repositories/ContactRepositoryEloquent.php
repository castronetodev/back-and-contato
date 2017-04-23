<?php

namespace apiPoseidon\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use apiPoseidon\Repositories\ContactRepository;
use apiPoseidon\Models\Contact;
use apiPoseidon\Validators\ContactValidator;

/**
 * Class ContactRepositoryEloquent
 * @package namespace apiPoseidon\Repositories;
 */
class ContactRepositoryEloquent extends BaseRepository implements ContactRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Contact::class;
    }

    /* protected $fieldSearchable = [
        'id',
        'category_id'

    ];*/

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
