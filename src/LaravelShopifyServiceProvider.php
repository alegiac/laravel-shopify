<?php

namespace Alegiac\LaravelShopify;

use Alegiac\LaravelShopify\Services\ShopifyManager;
use Eurostep\Edi\Edi;
use Illuminate\Support\ServiceProvider;

/**
 * Class LaravelShopifyServiceProvider
 *
 */
class LaravelShopifyServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
    }

    /**
     * @return void
     */
    public function register(): void
    {
        $this->publishes([
            __DIR__.'/../../config/shopify.php' => config_path('shopify.php'),
        ], 'config');

        $this->app->singleton('shopify', function () {
            return new ShopifyManager(config('shopify'));
        });
    }
}
