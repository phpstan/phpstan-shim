<?php

if (!in_array('phar', stream_get_wrappers(), true)) {
	throw new \Exception('Phar wrapper is not registered. Please review your php.ini settings.');
}

if (extension_loaded('phar') && !defined('__PHPSTAN_RUNNING__')) {
	require_once 'phar://' . __DIR__ . '/phpstan.phar/vendor/autoload.php';
}
