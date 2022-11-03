<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UploadFileService;

class UploadFileProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('App\Services\UploadFileService', function ($app) {
            return new UploadFileService();
        });
    }
}
