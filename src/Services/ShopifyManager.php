<?php

namespace Alegiac\LaravelShopify\Services;

class ShopifyManager
{
    protected $config;
    protected $service;

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->service = $config['use_graphql']
            ? new ShopifyGraphQLService($config)
            : new ShopifyRestService($config);
    }

    public function __call($method, $args)
    {
        return call_user_func_array([$this->service, $method], $args);
    }
}

