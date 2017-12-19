# Php GitHook Sniffer

[README em Português](README-pt_BR.md).

[![Build Status][ico-build]][link-build] [![Latest Stable Version][ico-version]][link-packagist] [![Total Downloads][ico-downloads]][link-downloads] [![Latest Unstable Version][ico-unstable]][link-unstable] [![Code Coverage][ico-scrutinizer]][link-scrutinizer] [![Quality Score][ico-code-quality]][link-code-quality] [![Software License][ico-license]](LICENSE.md)

Php-GitHook-Sniffer is a simple collection of automated tasks that you can perform with your git repository through the hooks.

### Available hooks

* pre-commit

### pre-commit

Check the commited files:

* Check PHP Syntax (with PHPLint)
* Fix code style according to PSR2 standard

#### Examples

##### verifying syntax:

![php-lint](https://i.imgur.com/Spx81FH.png)

##### Applying PSR2 rules:

![php-cs-fix](https://i.imgur.com/a62wAVP.png)

### Other Hooks

Coming Soon.

## Install

Add `especializati/php-githook-sniffer` as a development dependency in `composer.json`

```
"require-dev": {
    "especializati/php-githook-sniffer": "~0.0.4"
}
```

Or via Composer

``` bash
$ composer require especializati/php-githook-sniffer --dev
```

Copy src/Hooks/pre-commit for .git/hooks. ( Execution Permission Required )

``` bash
$ php -r "if(file_exists('./.git')&&file_exists('./vendor/especializati/php-githook-sniffer/src/Hooks/pre-commit')){copy('./vendor/especializati/php-githook-sniffer/src/Hooks/pre-commit','./.git/hooks/pre-commit');chmod('./.git/hooks/pre-commit',0777);}"
```

or

```
"scripts": {
    "post-install-cmd": [
      "php -r \"if(file_exists('./.git')&&file_exists('./vendor/especializati/php-githook-sniffer/src/Hooks/pre-commit')){copy('./vendor/especializati/php-githook-sniffer/src/Hooks/pre-commit','./.git/hooks/pre-commit');chmod('./.git/hooks/pre-commit',0777);}\""
    ],
    "post-update-cmd": [
      "php -r \"if(file_exists('./.git')&&file_exists('./vendor/especializati/php-githook-sniffer/src/Hooks/pre-commit')){copy('./vendor/especializati/php-githook-sniffer/src/Hooks/pre-commit','./.git/hooks/pre-commit');chmod('./.git/hooks/pre-commit',0777);}\""
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

[ico-version]: https://poser.pugx.org/especializati/php-githook-sniffer/v/stable
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg
[ico-build]: https://scrutinizer-ci.com/g/especializati/php-githook-sniffer/badges/build.png?b=master
[ico-scrutinizer]: https://scrutinizer-ci.com/g/especializati/php-githook-sniffer/badges/coverage.png?b=master
[ico-code-quality]: https://img.shields.io/scrutinizer/g/especializati/php-githook-sniffer.svg
[ico-downloads]: https://poser.pugx.org/especializati/php-githook-sniffer/downloads
[ico-unstable]: https://poser.pugx.org/especializati/php-githook-sniffer/v/unstable

[link-packagist]: https://packagist.org/packages/especializati/php-githook-sniffer
[link-build]: https://scrutinizer-ci.com/g/especializati/php-githook-sniffer/build-status/master
[link-scrutinizer]: https://scrutinizer-ci.com/g/especializati/php-githook-sniffer/?branch=master
[link-code-quality]: https://scrutinizer-ci.com/g/especializati/php-githook-sniffer
[link-downloads]: https://packagist.org/packages/especializati/php-githook-sniffer
[link-author]: https://github.com/joaorobertopb
[link-contributors]: ../../contributors
[link-unstable]: https://packagist.org/packages/especializati/php-githook-sniffer
