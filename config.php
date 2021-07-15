<?php
// define all configs in this file
// like constants, global includes

// 
// constants for path
define('BASE_PATH', str_replace("\\", "/", __DIR__));
define('BASE_URL', "http://localhost:4000");

define('ASSETS_PATH', BASE_URL . '/assets');
define('CSS_PATH', ASSETS_PATH . '/css');
define('JS_PATH', ASSETS_PATH . '/js');
define('IMG_PATH', ASSETS_PATH . '/images');

define('COMPONENT_PATH', BASE_PATH . '/components');
define('INCLUDES_PATH', BASE_PATH . '/includes');

// 
// global includes
include BASE_PATH . '/meta.php';
include BASE_PATH . '/utils.php';