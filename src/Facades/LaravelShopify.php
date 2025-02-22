<?php

namespace Alegiac\LaravelShopify\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alegiac\LaravelShopify\LaravelShopify
 */
class LaravelShopify extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Alegiac\LaravelShopify\LaravelShopify::class;
    }
}
