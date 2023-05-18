<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repository\GallaryRepositoryInterface', 'App\Repository\GallaryRepository');
        $this->app->bind('App\Repository\ContactRepositoryInterface', 'App\Repository\ContactRepository');
        $this->app->bind('App\Repository\QuieryRepositoryInterface', 'App\Repository\QuieryRepository');
        $this->app->bind('App\Repository\PrivacyRepositoryInterface', 'App\Repository\PrivacyRepository');
        $this->app->bind('App\Repository\PlansRepositoryInterface', 'App\Repository\PlansRepository');
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
