<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(\L5Swagger\L5SwaggerServiceProvider::class);

        $router = $this->app->make(Router::class);
        $router->pushMiddlewareToGroup('api', \L5Swagger\Http\Middleware\SetApiDefaults::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
