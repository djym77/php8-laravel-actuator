# Actuator endpoints let you monitor and interact with your application.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/djym77/laravel-actuator.svg?style=flat-square)](https://packagist.org/packages/djym77/laravel-actuator)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/djym77/laravel-actuator/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/djym77/laravel-actuator/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/djym77/laravel-actuator/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/djym77/laravel-actuator/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/djym77/laravel-actuator.svg?style=flat-square)](https://packagist.org/packages/djym77/laravel-actuator)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-actuator.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-actuator)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require djym77/laravel-actuator
```


You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-actuator-config"
```

This is the contents of the published config file:

```php
return [
];
```



## Usage

```php
$laravelActuator = new Djym77\LaravelActuator();
echo $laravelActuator->echoPhrase('Hello, Djym77!');
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

- [Jean-Yves Mousso](https://github.com/djym77)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
