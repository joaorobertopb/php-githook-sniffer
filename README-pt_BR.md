# Php GitHook Sniffer

[README on English](README.md).

[O que são git Hooks?](https://goo.gl/Qt3VWS)

[![Build Status][ico-build]][link-build] [![Latest Stable Version][ico-version]][link-packagist] [![Total Downloads][ico-downloads]][link-downloads] [![Latest Unstable Version][ico-unstable]][link-unstable] [![Code Coverage][ico-scrutinizer]][link-scrutinizer] [![Quality Score][ico-code-quality]][link-code-quality] [![Software License][ico-license]](LICENSE.md)

Php-GitHook-Sniffer é uma coleção simples de tarefas automatizadas que você pode executar com seu repositório git através dos [Hooks](https://goo.gl/Qt3VWS) ( gatilhos de eventos do Git ).

### Hooks disponíveis

* pre-commit

### pre-commit

Verifica os arquivos comitados:

* Verifica a sintaxe dos arquivos PHP (com PHPLint)
* Corrige o estilo do código de acordo com os padrões PSR2

#### Exemplos

##### Verificando sintaxe:

![php-lint](https://i.imgur.com/Spx81FH.png)

##### Aplicando regras PSR2:

![php-cs-fix](https://i.imgur.com/a62wAVP.png)

### Outros Hooks

Em breve.

## Instalação

Adicione `joaorobertopb/php-githook-sniffer` como uma dependência de desenvolvimento no arquivo `composer.json`

```
"require-dev": {
    "joaorobertopb/php-githook-sniffer": "~0.0.5"
}
```

Ou via Composer

``` bash
$ composer require joaorobertopb/php-githook-sniffer --dev
```

Copie `src/Hooks/pre-commit` para `.git/hooks`. ( Necessário execução de permissão )

``` bash
$ php -r "if(file_exists('./.git')&&file_exists('./vendor/joaorobertopb/php-githook-sniffer/src/Hooks/pre-commit')){copy('./vendor/joaorobertopb/php-githook-sniffer/src/Hooks/pre-commit','./.git/hooks/pre-commit');chmod('./.git/hooks/pre-commit',0777);}"
```

Ou

```
"scripts": {
    "post-install-cmd": [
      "php -r \"if(file_exists('./.git')&&file_exists('./vendor/joaorobertopb/php-githook-sniffer/src/Hooks/pre-commit')){copy('./vendor/joaorobertopb/php-githook-sniffer/src/Hooks/pre-commit','./.git/hooks/pre-commit');chmod('./.git/hooks/pre-commit',0777);}\""
    ],
    "post-update-cmd": [
      "php -r \"if(file_exists('./.git')&&file_exists('./vendor/joaorobertopb/php-githook-sniffer/src/Hooks/pre-commit')){copy('./vendor/joaorobertopb/php-githook-sniffer/src/Hooks/pre-commit','./.git/hooks/pre-commit');chmod('./.git/hooks/pre-commit',0777);}\""
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

[ico-version]: https://poser.pugx.org/joaorobertopb/php-githook-sniffer/v/stable
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg
[ico-build]: https://scrutinizer-ci.com/g/joaorobertopb/php-githook-sniffer/badges/build.png?b=master
[ico-scrutinizer]: https://scrutinizer-ci.com/g/joaorobertopb/php-githook-sniffer/badges/coverage.png?b=master
[ico-code-quality]: https://img.shields.io/scrutinizer/g/joaorobertopb/php-githook-sniffer.svg
[ico-downloads]: https://poser.pugx.org/joaorobertopb/php-githook-sniffer/downloads
[ico-unstable]: https://poser.pugx.org/joaorobertopb/php-githook-sniffer/v/unstable

[link-packagist]: https://packagist.org/packages/joaorobertopb/php-githook-sniffer
[link-build]: https://scrutinizer-ci.com/g/joaorobertopb/php-githook-sniffer/build-status/master
[link-scrutinizer]: https://scrutinizer-ci.com/g/joaorobertopb/php-githook-sniffer/?branch=master
[link-code-quality]: https://scrutinizer-ci.com/g/joaorobertopb/php-githook-sniffer
[link-downloads]: https://packagist.org/packages/joaorobertopb/php-githook-sniffer
[link-author]: https://github.com/joaorobertopb
[link-contributors]: ../../contributors
[link-unstable]: https://packagist.org/packages/joaorobertopb/php-githook-sniffer
