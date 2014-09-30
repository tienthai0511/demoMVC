<?php 

////////////////////////////////////////////////////////////////////////////////
// Configure the default time zone
////////////////////////////////////////////////////////////////////////////////
date_default_timezone_set('MST');

////////////////////////////////////////////////////////////////////////////////
// Configure the default currency
////////////////////////////////////////////////////////////////////////////////
setlocale(LC_MONETARY, 'en_US');

// Define location

defined('SITE_ROOT') ? NULL : define('SITE_ROOT', dirname(dirname(dirname(__FILE__))).DS);
#defined('APPLICATION') ? NULL : define('APPLICATION', SITE_ROOT .'application'.DS);
defined('CONTROLLERS') ? NULL : define('CONTROLLERS', APPLICATION .'controllers'.DS);
defined('MODELS') ? NULL : define('MODELS', APPLICATION .'models'.DS);
defined('VIEWS') ? NULL : define('VIEWS', APPLICATION .'views'.DS);
defined('INC') ? NULL : define('INC', APPLICATION .'inc'.DS);

defined('SYS') ? NULL : define('SYS', SITE_ROOT .'sys'.DS);
defined('PUBLIC_HTML') ? NULL : define('PUBLIC_HTML', SITE_ROOT .'public_html'.DS);
defined('JS') ? NULL : define('JS', PUBLIC_HTML .'js'.DS);
defined('JS') ? NULL : define('JS', PUBLIC_HTML .'js'.DS);
defined('CSS') ? NULL : define('CSS', PUBLIC_HTML .'css'.DS);
defined('IMGAGES') ? NULL : define('IMGAGES', PUBLIC_HTML .'images'.DS);

// Define absolute path to includes
defined('INCLUDE_PATH') ? NULL : define('INCLUDE_PATH', SITE_ROOT.'includes'.DS);
defined('FUNCTION_PATH') ? NULL : define('FUNCTION_PATH', INCLUDE_PATH.'functions'.DS);
defined('LIB_PATH') ? NULL : define('LIB_PATH', INCLUDE_PATH.'libraries'.DS);
defined('MODEL_PATH') ? NULL : define('MODEL_PATH', INCLUDE_PATH.'models'.DS);
defined('VIEW_PATH') ? NULL : define('VIEW_PATH', INCLUDE_PATH.'views'.DS);
