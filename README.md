<p align="center">
    <img src="https://banners.beyondco.de/Blade%20Font%20Awesome%206%20Icon.png?theme=light&packageManager=composer+require&packageName=toneflix-code%2Fblade-fontawesome6-free&pattern=topography&style=style_2&description=A+package+to+easily+make+use+of+Font+Awesome+6+Icons+in+your+Laravel+Blade+views.&md=1&showWatermark=1&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg" width="1280" title="Social Card Blade Font Awesome 6 Icon">
</p>

# Blade Font Awesome 6 Icon

A package to easily make use of [Font Awesome 6](https://fontawesome.com/) in your Laravel Blade views.

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-github-actions]][link-github-actions]
[![Style CI][ico-styleci]][link-styleci]
[![Total Downloads][ico-downloads]][link-downloads]

For a full list of available icons see [the `resources/svg` directory](./resources/svg) or search

## Requirements

- PHP 7.4 or higher
- Laravel 8.0 or higher

## Install

```sh
$ composer require toneflix-code/blade-fontawesome6-free
```

## Usage

Icons can be used a self-closing Blade components which will be compiled to SVG icons:
```blade
<x-fa6-solid-check />
```

You can also pass classes to your icon components:
```blade
<x-fa6-solid-check class="w-6 h-6 text-gray-500 fill-current"/>
```

And even use inline styles:
```blade
<x-fa6-solid-check style="fill: #F00" />
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-fontawesome6-free --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-fontawesome6-free/fa6-solid-check.svg') }}" width="10" height="10"/>
```

### Blade Icons

Blade Remix icon uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality.

## Testing

```bash
$ composer test
```

## Credits

- [3m1n3nc3.][link-author] 
- [All Contributors][link-contributors]

## License

This project is licensed under the MIT License (MIT) – see the [LICENSE](LICENSE.md) file for details.

[ico-version]: https://img.shields.io/packagist/v/toneflix/blade-fontawesome6-free.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-github-actions]: https://img.shields.io/github/workflow/status/toneflix/blade-fontawesome6-free/Tests.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/442621603/shield
[ico-downloads]: https://img.shields.io/packagist/dt/toneflix/blade-fontawesome6-free.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/toneflix/blade-fontawesome6-free
[link-github-actions]: https://github.com/toneflix/blade-fontawesome6-free/actions
[link-styleci]: https://styleci.io/repos/442621603
[link-downloads]: https://packagist.org/packages/toneflix/blade-fontawesome6-free
[link-author]: https://github.com/3m1n3nc3 
[link-contributors]: ../../contributors
