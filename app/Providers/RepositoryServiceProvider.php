<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        \App\Repositories\EloquentRepositoryInterface::class            => \App\Repositories\Eloquent\BaseRepository::class,
        \App\Repositories\UserRepositoryInterface::class                => \App\Repositories\Eloquent\UserRepository::class,
        \App\Repositories\AdminRepositoryInterface::class               => \App\Repositories\Eloquent\AdminRepository::class,
        \App\Repositories\CategoryRepositoryInterface::class            => \App\Repositories\Eloquent\CategoryRepository::class,
        \App\Repositories\BrandRepositoryInterface::class               => \App\Repositories\Eloquent\BrandRepository::class,
        \App\Repositories\AttributeRepositoryInterface::class           => \App\Repositories\Eloquent\AttributeRepository::class,
        \App\Repositories\ProductRepositoryInterface::class             => \App\Repositories\Eloquent\ProductRepository::class,
        \App\Repositories\ProductImageRepositoryInterface::class        => \App\Repositories\Eloquent\ProductImageRepository::class,
        \App\Repositories\ProductAttributeRepositoryInterface::class    => \App\Repositories\Eloquent\ProductAttributeRepository::class,
        \App\Repositories\OrderRepositoryInterface::class               => \App\Repositories\Eloquent\OrderRepository::class,
        \App\Repositories\OrderItemsRepositoryInterface::class          => \App\Repositories\Eloquent\OrderItemsRepository::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
