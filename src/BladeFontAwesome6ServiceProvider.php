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
                'path'   => __DIR__.'/../resources/svg',
                'prefix' => 'fa6',
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
