<?php

namespace apiPoseidon\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use apiPoseidon\Repositories\MenuRepository;
use apiPoseidon\Models\Menu;
use apiPoseidon\Validators\MenuValidator;

/**
 * Class MenuRepositoryEloquent
 * @package namespace apiPoseidon\Repositories;
 */
class MenuRepositoryEloquent extends BaseRepository implements MenuRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Menu::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
