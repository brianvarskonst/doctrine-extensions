# Bvsk Doctrine Extensions

Provides Doctrine Extension features

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Quality Assurance](#quality-assurance)

## Requirements
- PHP 8.1
- Composer 2
- Symfony 5 || 6

## Installation

### Composer

Install with [Composer](https://getcomposer.org/):

```shell
$ composer require brianvarskonst/doctrine-extensions
```

## Quality Assurance

This Package provides a baseline of common used QA Code tools which you can run simply by custom composer script commands.

### PHP CodeSniffer

To ensure the quality of the code this package uses the Inpsyde Coding Standards,
which are especially created for WordPress Projects. You can also use it for every other projects.
Provides a good set of coding rules via PHP CodeSniffer CLI Tool.

```shell
$ composer cs
```

### Psalm

```shell
$ composer psalm
```

### Tests

#### Run all tests

```sh
$ composer tests
```

#### Run unit tests

```sh
$ composer tests:unit
```

#### Run integration tests

Integration tests needs to run from the project repository as they need a fully configured Symfony kernel.

```sh
$ composer tests:integration
```

## License

Copyright (c) 2022, Brianvarskonst under [MIT](LICENSE) License

## Contributing

All feedback / bug reports / pull requests are welcome.
