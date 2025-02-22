<?php

namespace Alegiac\LaravelShopify\Services;

use Illuminate\Support\Facades\Http;

/**
 * Class ShopifyRestService
 * Class to handle rest requests
 */
class ShopifyRestService
{
    protected $config;

    protected $baseUrl;

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->baseUrl = 'https://'.$config['shop_url'].'/admin/api/'.$config['api_version'].'/';
    }

    /**
     * @throws \Illuminate\Http\Client\ConnectionException
     */
    public function getProducts(): string
    {
        return Http::withHeaders($this->getHeaders())->get($this->baseUrl.'products.json')->json();
    }

    /**
     * @throws \Illuminate\Http\Client\ConnectionException
     */
    public function createOrder(array $data): string
    {
        return Http::withHeaders($this->getHeaders())->post($this->baseUrl.'orders.json', ['order' => $data])->json();
    }

    private function getHeaders(): array
    {
        return [
            'X-Shopify-Access-Token' => $this->config['access_token'],
            'Content-Type' => 'application/json',
        ];
    }
}
