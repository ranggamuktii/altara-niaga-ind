<?php

namespace App\Providers;

use App\ViewComposers\NavigationComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

/**
 * Service Provider to register View Composers for shared layout components.
 */
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Automatically inject company and navigation data to views/components that require them
        View::composer(
            ['layouts.app', 'components.navbar', 'components.footer', 'pages.home'],
            NavigationComposer::class
        );
    }
}

