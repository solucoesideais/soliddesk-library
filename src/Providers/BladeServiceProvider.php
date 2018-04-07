<?php

namespace Library\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerRouteMenuDirective();
    }

    private function registerRouteMenuDirective()
    {
        Blade::if('route', function ($routes) {
            if (! is_array($routes)) {
                $routes = [$routes];
            }

            foreach ($routes as $route) {
                if (Request::is($route)) {
                    return true;
                }
            }

            return false;
        });
    }
}
