# PHPStan shim

The prefixed `.phar` distribution is built using [phpstan-compiler](https://github.com/fprochazka/phpstan-compiler)

## Usage

Install the package

```bash
composer require --dev phpstan/phpstan-shim
```

and use it like the original executable

```bash
vendor/bin/phpstan.phar analyse src
```

Check out the main repo for more options https://github.com/phpstan/phpstan

## Configuration

It is recommended, that you set a `tmpDir` in your `phpstan.neon`, otherwise it uses the system temp directory.

```
parameters:
    tmpDir: var/cache/phpstan
```
