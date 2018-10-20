<?php

if (extension_loaded('phar') && !defined('__PHPSTAN_RUNNING__')) {
	require_once 'phar://' . __DIR__ . '/phpstan.phar/vendor/autoload.php';
}
