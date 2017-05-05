# PHPStan shim

The prefixed `.phar` distribution is built using [phpstan-compiler](https://github.com/fprochazka/phpstan-compiler)

It is recommended, that you set a `tmpDir` in your `phpstan.neon`, otherwise it uses the system temp directory.

```
parameters:
    tmpDir: var/cache/phpstan
```

## Extensions

This distribution contains all the PHPStan extensions

* [Doctrine](https://github.com/phpstan/phpstan-doctrine)
* [Guzzle](https://github.com/phpstan/phpstan-guzzle)
* [Nette Framework](https://github.com/phpstan/phpstan-nette)
* [Dibi - Database Abstraction Library](https://github.com/phpstan/phpstan-dibi)

You can enable them, by including their config with a `phar://phpstan.phar/` prefix.

```
includes:
	- phar://phpstan.phar/vendor/phpstan/phpstan-doctrine/extension.neon
```
