# PHPStan shim

The prefixed `.phar` distribution is built using [phpstan-compiler](https://github.com/fprochazka/phpstan-compiler)

It is recommended, that you set a `tmpDir` in your `phpstan.neon`, otherwise it uses the system temp directory.

```
parameters:
    tmpDir: var/cache/phpstan
```
