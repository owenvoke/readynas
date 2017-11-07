# readynas

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-styleci]][link-styleci]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A PHP management suite for ReadyNAS devices.

## Structure

```
src/
tests/
vendor/
```

## Install

Via Composer

``` bash
$ composer require pxgamer/readynas
```

## Usage

All that needs to be done, is to set the environment variables.  
`NAS_HOST` - The IP/domain of the NAS  
`NAS_USER` - The username to connect to your NAS with  
`NAS_PASS` - The password to connect to your NAS with  

Environment variables can be defined in multiple ways.

- Using a `.env` file via [`vlucas/phpdotenv`][link-vlucas/phpdotenv]
- Using the `export` command on Unix
- Using the `setx` command on Windows

## Compatibility

System       | Firmware | Status
------------ | -------- | -------
ReadyNAS 102 | 6.7+     | ✓

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email owzie123@gmail.com instead of using the issue tracker.

## Credits

- [pxgamer][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pxgamer/readynas.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pxgamer/readynas/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/105919114/shield
[ico-code-quality]: https://img.shields.io/codecov/c/github/pxgamer/readynas.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pxgamer/readynas.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pxgamer/readynas
[link-travis]: https://travis-ci.org/pxgamer/readynas
[link-styleci]: https://styleci.io/repos/105919114
[link-code-quality]: https://codecov.io/gh/pxgamer/readynas
[link-downloads]: https://packagist.org/packages/pxgamer/readynas
[link-author]: https://github.com/pxgamer
[link-contributors]: ../../contributors
[link-vlucas/phpdotenv]: https://packagist.org/packages/vlucas/phpdotenv
