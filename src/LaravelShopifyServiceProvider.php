<?php

namespace alegiac\LaravelShopify;

use alegiac\LaravelShopify\Commands\LaravelShopifyCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelShopifyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-shopify')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_shopify_table')
            ->hasCommand(LaravelShopifyCommand::class);
    }
}
