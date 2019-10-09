<?php
namespace sindev\sinpick;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class DatePickerServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('sinpick', function ($app) {
            return $app->make('sindev\sinpick\DatePicker');
        });
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views/', 'datepicker');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['sinpick'];
    }
    /**
     * Registers app bindings and aliases.
     */
    protected function registerBindings()
    {
        $this->app->singleton(DatePicker::class, function () {
            return new DatePicker();
        });

        $this->app->alias(DatePicker::class, 'LaraPick');
    }
}
