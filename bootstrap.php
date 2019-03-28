<?php

if (in_array('phar', stream_get_wrappers()) && extension_loaded('phar') && !defined('__PHPSTAN_RUNNING__')) {
	require_once 'phar://' . __DIR__ . '/phpstan.phar/vendor/autoload.php';
}
