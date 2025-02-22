# This is my package laravel-shopify

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alegiac/laravel-shopify.svg?style=flat-square)](https://packagist.org/packages/alegiac/laravel-shopify)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/alegiac/laravel-shopify/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/alegiac/laravel-shopify/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/alegiac/laravel-shopify/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/alegiac/laravel-shopify/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/alegiac/laravel-shopify.svg?style=flat-square)](https://packagist.org/packages/alegiac/laravel-shopify)

## Installation

You can install the package via composer:

```bash
composer require alegiac/laravel-shopify
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-shopify-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-shopify-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-shopify-views"
```

## Usage

```php
$laravelShopify = new Alegiac\LaravelShopify();
echo $laravelShopify->echoPhrase('Hello, alegiac!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alessandro Giacomella](https://github.com/alegiac)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
