<?php

namespace apiPoseidon\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\apiPoseidon\Repositories\CategoryRepository::class, \apiPoseidon\Repositories\CategoryRepositoryEloquent::class);
        $this->app->bind(\apiPoseidon\Repositories\MenuRepository::class, \apiPoseidon\Repositories\MenuRepositoryEloquent::class);
        $this->app->bind(\apiPoseidon\Repositories\PictureRepository::class, \apiPoseidon\Repositories\PictureRepositoryEloquent::class);
        $this->app->bind(\apiPoseidon\Repositories\CommandRepository::class, \apiPoseidon\Repositories\CommandRepositoryEloquent::class);
        $this->app->bind(\apiPoseidon\Repositories\CityRepository::class, \apiPoseidon\Repositories\CityRepositoryEloquent::class);
        $this->app->bind(\apiPoseidon\Repositories\ContactRepository::class, \apiPoseidon\Repositories\ContactRepositoryEloquent::class);
        //:end-bindings:
    }
}
