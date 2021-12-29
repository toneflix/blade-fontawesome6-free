<?php

declare(strict_types=1);

namespace ToneflixCode\FontAwesome6;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

class BladeFontAwesome6ServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('awesome6solid', [
                'path'   => __DIR__.'/../resources/svg/solid',
                'prefix' => 'fa6solid',
            ]);
            $factory->add('awesome6regular', [
                'path'   => __DIR__.'/../resources/svg/regular',
                'prefix' => 'fa6regular',
            ]);
            $factory->add('awesome6brands', [
                'path'   => __DIR__.'/../resources/svg/brands',
                'prefix' => 'fa6brands',
            ]);
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-fontawesome6-free'),
            ], 'blade-fontawesome6-free');
        }
    }
}
