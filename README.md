# phpstan/phpstan-shim

**Thank you for using PHPStan!**

With the release of **PHPStan 0.12**, the primary Composer package used by most users,
`phpstan/phpstan`, has switched to a PHAR file. It works the same way as `phpstan-shim`.
The need for a separate PHAR distribution has ceased.
Package `phpstan/phpstan-shim` is no longer needed.

You should upgrade to `phpstan/phpstan` 0.12 with the following steps:

1) In your composer.json, rewrite line with `"phpstan/phpstan-shim"`
   to `"phpstan/phpstan": "^0.12"`.
2) Delete your `composer.lock`.
3) Delete `vendor/phpstan` directory.
4) Delete `vendor/bin/phpstan` and `vendor/bin/phpstan.phar`.
5) Run composer install.

If you have any problem upgrading, don't hesitate to describe your issue at:
https://github.com/phpstan/phpstan/issues/new/choose
