<?php

namespace App\Providers;

use App\Helpers\StorageMethod\RepositoryManager;
use Illuminate\Support\ServiceProvider;

class StorageMethodServiceProvider extends ServiceProvider
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
        $this->app->singleton('App\Helpers\StorageMethod\Repositories\StorageRepository', function ($app) {
            $manager = new RepositoryManager($app);
            return $manager->driver();
        });
    }
}
