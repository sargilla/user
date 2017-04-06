<?php

namespace Sargilla\User\Providers;

use Sargilla\User\Http\Middleware\GuestUser;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

/**
 * Class GuestUserServiceProvider.
 *
 * @package Sargilla\User\Providers
 */
class GuestUserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param Router $router
     */
    public function boot(Router $router)
    {
        $router->pushMiddlewareToGroup('web', GuestUser::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
