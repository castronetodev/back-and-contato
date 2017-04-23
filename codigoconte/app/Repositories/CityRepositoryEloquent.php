<?php

namespace apiPoseidon\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use apiPoseidon\Repositories\CityRepository;
use apiPoseidon\Models\City;
use apiPoseidon\Validators\CityValidator;

/**
 * Class CityRepositoryEloquent
 * @package namespace apiPoseidon\Repositories;
 */
class CityRepositoryEloquent extends BaseRepository implements CityRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return City::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
