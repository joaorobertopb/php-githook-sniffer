# Php GitHook Sniffer

[README on English](README.md).

[![Build Status][ico-build]][link-build] [![Latest Stable Version][ico-version]][link-packagist] [![Total Downloads][ico-downloads]][link-downloads] [![Latest Unstable Version][ico-unstable]][link-unstable] [![Code Coverage][ico-scrutinizer]][link-scrutinizer] [![Quality Score][ico-code-quality]][link-code-quality] [![Software License][ico-license]](LICENSE.md) 

Php-GitHook-Sniffer é uma coleção simples de tarefas automatizadas que você pode executar com seu repositório git através dos Hooks ( gatilhos de eventos do Git ).

### Hooks disponíveis

* pre-commit

### pre-commit

Verifica os arquivos commitados:

* Verifica a sintaxe dos arquivos PHP (com PHPLint)
* Corrige o estilo do código de acordo com os padrões PSR2

### Outros Hooks

Em breve.

## Instalação

Adicione `especializati/php-githook-sniffer` como uma dependência de desenvolvimento no arquivo `composer.json`

```
"require-dev": {
    "especializati/php-githook-sniffer": "0.0.1"
}
```

Ou via Composer

``` bash
$ composer require especializati/php-githook-sniffer --dev
```

Copie `src/Hooks/pre-commit` para `.git/hooks`. ( Necessário execução de permissão )

``` bash
$ php -r "if(file_exists('./.git')&&file_exists('./src/Hooks/pre-commit')){copy('./src/Hooks/pre-commit','./.git/hooks/pre-commit');chmod('./.git/hooks/pre-commit',0777);}"
```

Ou

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

## Registro de mudanças

Consulte [CHANGELOG](CHANGELOG.md) Para mais informações sobre o que mudou recentemente.

## Testes

Em breve.

## Créditos

- [João Roberto][link-author]
- [All Contributors][link-contributors]

## Licença

The MIT License (MIT). Consulte [License File](LICENSE.md) para mais informações.

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