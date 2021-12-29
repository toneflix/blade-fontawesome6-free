<?php

namespace ToneflixCode\FontAwesome6\Tests;

use ToneflixCode\FontAwesome6\BladeFontAwesome6ServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            BladeIconsServiceProvider::class,
            BladeFontAwesome6ServiceProvider::class,
        ];
    }
}
