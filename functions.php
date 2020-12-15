<?php

define('TEMPNAME_PATH', get_stylesheet_directory() . '/');

//Include vendor files
if (file_exists(dirname(ABSPATH) . '/vendor/autoload.php')) {
    require_once dirname(ABSPATH) . '/vendor/autoload.php';
}

require_once TEMPNAME_PATH . 'library/Vendor/Psr4ClassLoader.php';
$loader = new TEMPNAME\Vendor\Psr4ClassLoader();
$loader->addPrefix('TEMPNAME', TEMPNAME_PATH . 'library');
$loader->addPrefix('TEMPNAME', TEMPNAME_PATH . 'source/php/');
$loader->register();

new TEMPNAME\App();
