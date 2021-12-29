<?php

namespace ToneflixCode\FontAwesome6\Tests;

use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;
use ToneflixCode\FontAwesome6\BladeFontAwesome6ServiceProvider;

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
