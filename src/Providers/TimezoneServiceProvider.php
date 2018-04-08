<?php

namespace Library\Providers;

use Illuminate\Support\Carbon;
use Illuminate\Support\ServiceProvider;

class TimezoneServiceProvider extends ServiceProvider
{
    const BRAZIL_DATE_TIME_FORMAT = 'd/m/Y H:i:s';

    const BRAZIL_TIMEZONE = 'America/Sao_Paulo';

    const BRAZIL_LOCALE = 'pt_BR';

    public function boot()
    {
        Carbon::setToStringFormat(self::BRAZIL_DATE_TIME_FORMAT);

        $this->app->config->set('app.timezone', self::BRAZIL_TIMEZONE);

        Carbon::setLocale(self::BRAZIL_LOCALE);

        date_default_timezone_set(self::BRAZIL_TIMEZONE);
    }
}