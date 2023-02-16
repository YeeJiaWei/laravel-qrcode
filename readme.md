# Laravel wrapper for phpqrcode

[![Latest Version on Packagist](https://img.shields.io/packagist/v/yeejiawei/laravel-qrcode.svg?style=flat-square)](https://packagist.org/packages/yeejiawei/laravel-qrcode)
[![Total Downloads](https://img.shields.io/packagist/dt/yeejiawei/laravel-qrcode.svg?style=flat-square)](https://packagist.org/packages/yeejiawei/laravel-qrcode)

## Installation

You can install the package via composer:

```bash
composer require yeejiawei/laravel-qrcode
```

## Usage

```php
use \Yeejiawei\LaravelQrcode\LaravelQrcode;

$qr = LaravelQrcode::create('test');

$qr->setErrorCorrectionLevel(ErrorCorrectionLevel::QR_ECLEVEL_M); // default is ErrorCorrectionLevel::QR_ECLEVEL_M

$qr->setSize(100); // Set size of the qr code

$qr->setMargin(4); // Set margin of the qr code

$qr->save(storage_path('app/qr.png'));
```

## Credits

- [Yee Jia Wei](https://github.com/YeeJiaWei)
- [All Contributors](../../contributors)
- Phil Karn, KA9Q

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.