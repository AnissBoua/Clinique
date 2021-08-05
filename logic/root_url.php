<?php namespace Clinique;

define('PROT', (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? 'https://' : 'http://');
define('ROOT_URL', PROT . $_SERVER['HTTP_HOST'] . '/' . 'clinique' . '/');

// define('ROOT_TEST', PROT . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '/');
