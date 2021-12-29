<p align="center">
    <img src="https://banners.beyondco.de/Blade%20Font%20Awesome%206%20Icon.png?theme=light&packageManager=composer+require&packageName=toneflix-code%2Fblade-fontawesome6-free&pattern=topography&style=style_2&description=A+package+to+easily+make+use+of+Font+Awesome+6+Icons+in+your+Laravel+Blade+views.&md=1&showWatermark=1&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg" width="1280" title="Social Card Blade Font Awesome 6 Icon">
</p>

# Blade Font Awesome 6 Icon

A package to easily make use of [Font Awesome 6](https://fontawesome.com/) in your Laravel Blade views.

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
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
<x-fa6-circle-check-solid />
<x-fa6s-circle-check />
```

You can also pass classes to your icon components:
```blade
<x-fa6-circle-check-regular class="w-6 h-6 text-gray-500 fill-current"/>
<x-fa6r-circle-check class="w-6 h-6 text-gray-500 fill-current"/>
```

And even use inline styles:
```blade
<x-fa6-500px-brand style="fill: #F00" />
<x-fa6b-500px style="fill: #F00" />
```

## Available Set

The library comes pre-bundled with all of Fontawesome 6 free icons, which you are free to extend with pro icons if you have a license

Available set include:
```
all      []
regular  [r]
solid    [s]
brands   [b]
```
If you chose to use the `all` set you would have to suffix your directive with the appropriate set you require:
```
<x-fa6-check-solid />
``` 

If you are not using a specific set then you would have to add the first letter of the set to the prefix:
```
<x-fa6r-bell />
``` 

### Raw SVG Icons
 
If you want to use the raw SVG icons as assets, you can publish them using: 

```bash
php artisan vendor:publish --tag=blade-fontawesome6-free --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-fontawesome6/all/fa6-circle-check-regular.svg') }}" width="10" height="10"/>
```

### HTML `<select></select>`
You can also make a html `<select></select>` prefilled with your preferred icon set for convenience.
```blade
<x-fa6-select-icon />
```
The `fa6-select-icon` requires that you publish the raw SVG icons as assets.

```bash
php artisan vendor:publish --tag=blade-fontawesome6-free --force
```

The `fa6-select-icon` accepts all HTML select parameters and three optional parameters:
```html
    string "selected": <!-- A string value representing the name of the currently selected icon -->
    string "set": <!-- The name of the required icon set -->
    string "path": <!-- You are also allowed to load icons not presently part of the library, in this case use an absolute path to the required icons directory -->

    <x-fa6-select-icon selected="circle-check" set="solid" />
    <x-fa6-select-icon selected="circle-check" set="solid" :path="public_path('icons/remix')" />
```

### Helper
The `loadSvg()` helper method has been provided for convenience to generate [an array of all icons available in your selected set | a raw icon like using the blade directives would do | a url to your icon incase you need to append it directly into a html tag].

The `loadSvg()` helper requires that you publish the raw SVG icons as assets.

```bash
php artisan vendor:publish --tag=blade-fontawesome6-free --force
```

The `loadSvg()` helper accepts four optional parameters:
```php
loadSvg(
    string $icon_name = null  // The name of an icon that is currently available in the active set
    string $ICONS_PATH = null // You are also allowed to load icons not presently part of the library, in this case use an absolute path to the required icons directory
    boolean $link = false      // A boolen value indicating whether you want a the raw icon returned or an absolute link to the icon
    boolean $set = 'all'      // The name of the required icon set
}
```

### Blade Icons

Blade Font Awesome 6 Icon uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality.


## Testing

```bash
$ composer test
```

## Credits

- [3m1n3nc3.][link-author] 
- [All Contributors][link-contributors]

## License

This project is licensed under the MIT License (MIT) – see the [LICENSE](LICENSE) file for details.

[ico-version]: https://img.shields.io/badge/packagist-v1.00-blue.svg?style=flat-square&logo=packagist
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-github-actions]: https://img.shields.io/github/workflow/status/toneflix/blade-fontawesome6-free/Tests.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/442621603/shield
[ico-downloads]: https://img.shields.io/packagist/dt/toneflix-code/blade-fontawesome6-free.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/toneflix-code/blade-fontawesome6-free
[link-github-actions]: https://github.com/toneflix/blade-fontawesome6-free/actions
[link-styleci]: https://styleci.io/repos/442621603
[link-downloads]: https://packagist.org/packages/toneflix-code/blade-fontawesome6-free
[link-author]: https://github.com/3m1n3nc3 
[link-contributors]: ../../contributors
