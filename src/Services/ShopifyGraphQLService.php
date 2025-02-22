<?php

namespace Alegiac\LaravelShopify\Services;

use Illuminate\Support\Facades\Http;

class ShopifyGraphQLService
{
    protected $config;

    protected $endpoint;

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->endpoint = 'https://'.$config['shop_url'].'/admin/api/'.$config['api_version'].'/graphql.json';
    }

    public function query(string $query, array $variables = [])
    {
        $response = Http::withHeaders($this->getHeaders())
            ->post($this->endpoint, ['query' => $query, 'variables' => $variables]);

        return $response->json();
    }

    public function getProducts()
    {
        $query = 'query { products(first: 10) { edges { node { id title } } } }';

        return $this->query($query);
    }

    public function createOrder(array $data)
    {
        $query = "mutation createOrder($input: OrderInput!) { orderCreate(input: $input) { order { id } } }";

        return $this->query($query, ['input' => $data]);
    }

    private function getHeaders()
    {
        return [
            'X-Shopify-Access-Token' => $this->config['access_token'],
            'Content-Type' => 'application/json',
        ];
    }
}
