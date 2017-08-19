# Php GitHook Sniffer

[![Latest Version on Packagist][ico-version]][link-packagist] [![Software License][ico-license]](LICENSE.md) [![Build Status][ico-travis]][link-travis] [![Coverage Status][ico-scrutinizer]][link-scrutinizer] [![Quality Score][ico-code-quality]][link-code-quality] [![Total Downloads][ico-downloads]][link-downloads]


Php-GitHook-Sniffer is a simple collection of automated tasks that you can perform with your git repository through the hooks.

### Available hooks

* pre-commit

### pre-commit

Check the commited files:

* Check PHP Syntax (with PHPLint)
* Fix code style according to PSR2 standard

### Other Hooks

Coming Soon.

## Install

Add `especializati/php-githook-sniffer` as a development dependency in `composer.json`

```
"require-dev": {
    "especializati/php-githook-sniffer": "0.0.1"
}
```

Or via Composer

``` bash
$ composer require especializati/php-githook-sniffer --dev
```

Copy src/Hooks/pre-commit for .git/hooks. ( Execution Permission Required )

``` bash
$ php -r "if(file_exists('./.git')&&file_exists('./src/Hooks/pre-commit')){copy('./src/Hooks/pre-commit','./.git/hooks/pre-commit');chmod('./.git/hooks/pre-commit',0777);}"
```

or

```
"scripts": {
    "post-install-cmd": [
      "php -r \"if(file_exists('./.git')&&file_exists('./src/Hooks/pre-commit')){copy('./src/Hooks/pre-commit','./.git/hooks/pre-commit');chmod('./.git/hooks/pre-commit',0777);}\""
    ],
    "post-update-cmd": [
      "php -r \"if(file_exists('./.git')&&file_exists('./src/Hooks/pre-commit')){copy('./src/Hooks/pre-commit','./.git/hooks/pre-commit');chmod('./.git/hooks/pre-commit',0777);}\""
    ]
}
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

Coming Soon.

## Credits

- [João Roberto][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/especializati/php-githook-sniffer.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/especializati/php-githook-sniffer/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/especializati/php-githook-sniffer.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/especializati/php-githook-sniffer.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/especializati/php-githook-sniffer.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/especializati/php-githook-sniffer
[link-travis]: https://travis-ci.org/especializati/php-githook-sniffer
[link-scrutinizer]: https://scrutinizer-ci.com/g/especializati/php-githook-sniffer/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/especializati/php-githook-sniffer
[link-downloads]: https://packagist.org/packages/especializati/php-githook-sniffer
[link-author]: https://github.com/joaorobertopb
[link-contributors]: ../../contributors
