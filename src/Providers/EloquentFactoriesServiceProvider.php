<?php

namespace Library\Providers;

use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factory as EloquentFactory;
use Illuminate\Support\ServiceProvider;

class EloquentFactoriesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerEloquentFactoriesFrom(__DIR__ . '/../../database/factories');
    }

    protected function registerEloquentFactoriesFrom($path)
    {
        if (class_exists(FakerFactory::class)) {
            $this->app->make(EloquentFactory::class)->load($path);
        }
    }
}