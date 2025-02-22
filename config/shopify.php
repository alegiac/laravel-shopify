<?php

return [
    'shop_url' => env('SHOPIFY_SHOP_URL'),
    'api_key' => env('SHOPIFY_API_KEY'),
    'api_secret' => env('SHOPIFY_API_SECRET'),
    'access_token' => env('SHOPIFY_ACCESS_TOKEN'),
    'api_version' => env('SHOPIFY_API_VERSION', '2025-01'),
    'use_graphql' => env('SHOPIFY_USE_GRAPHQL', false),
];
