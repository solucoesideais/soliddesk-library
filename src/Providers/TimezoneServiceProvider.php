<?php

namespace Library\Providers;

use Illuminate\Support\Carbon;
use Illuminate\Support\ServiceProvider;

class TimezoneServiceProvider extends ServiceProvider
{
    const BRAZIL_DATE_TIME_FORMAT = 'd/m/Y H:i:s';

    public function boot()
    {
        Carbon::setToStringFormat(self::BRAZIL_DATE_TIME_FORMAT);

        $this->app->config->set('app.timezone', 'America/Sao_Paulo');
    }
}