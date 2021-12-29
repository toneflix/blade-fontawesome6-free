<?php

declare(strict_types=1);

namespace ToneflixCode\FontAwesome6;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;
use ToneflixCode\FontAwesome6\Components\Fa6SelectIcon;

class BladeFontAwesome6ServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('awesome6ix', [
                'path'   => __DIR__.'/../resources/svg/all',
                'prefix' => 'fa6',
            ]);
            $factory->add('awesome6ix-solid', [
                'path'   => __DIR__.'/../resources/svg/solid',
                'prefix' => 'fa6s',
            ]);
            $factory->add('awesome6ix-regular', [
                'path'   => __DIR__.'/../resources/svg/regular',
                'prefix' => 'fa6r',
            ]);
            $factory->add('awesome6ix-brands', [
                'path'   => __DIR__.'/../resources/svg/brands',
                'prefix' => 'fa6b',
            ]);
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-fontawesome6'),
            ], 'blade-fontawesome6-free');
        }

        $this->loadViewComponentsAs('blade-fontawesome6-free', [
            Fa6SelectIcon::class,
        ]);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'blade-fontawesome6');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/blade-fontawesome6'),
        ], 'blade-fontawesome6-views');
    }
}
