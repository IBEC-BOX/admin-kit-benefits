# Benefits package for Admin Kit

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ibecsystems/admin-kit-benefits.svg?style=flat-square)](https://packagist.org/packages/ibecsystems/admin-kit-benefits)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ibec-box/admin-kit-benefits/run-tests.yml?branch=3.x&label=tests&style=flat-square)](https://github.com/ibec-box/admin-kit-benefits/actions?query=workflow%3Arun-tests+branch%3A3.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ibec-box/admin-kit-benefits/fix-php-code-style-issues.yml?branch=3.x&label=code%20style&style=flat-square)](https://github.com/ibec-box/admin-kit-benefits/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3A3.x)
[![Total Downloads](https://img.shields.io/packagist/dt/ibec-box/admin-kit-benefits.svg?style=flat-square)](https://packagist.org/packages/ibecsystems/admin-kit-benefits)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require ibecsystems/admin-kit-benefits
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="admin-kit-benefits-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="admin-kit-benefits-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="admin-kit-benefits-views"
```

## Usage

```php
class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ...
            ->plugins([
                ...
                \AdminKit\Benefits\FilamentPlugin::make(),
            ]);
    }
}
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

- [Anastas Mironov](https://github.com/ast21)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
