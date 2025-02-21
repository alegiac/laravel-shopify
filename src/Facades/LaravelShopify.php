<?php

namespace alegiac\LaravelShopify\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \alegiac\LaravelShopify\LaravelShopify
 */
class LaravelShopify extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \alegiac\LaravelShopify\LaravelShopify::class;
    }
}
