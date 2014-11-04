<?php
session_start();
////////////////////////////////////////////////////////////////////////////////
// Configure the default time zone
////////////////////////////////////////////////////////////////////////////////
date_default_timezone_set('MST');

////////////////////////////////////////////////////////////////////////////////
// Configure the default currency
////////////////////////////////////////////////////////////////////////////////
setlocale(LC_MONETARY, 'en_US');

////////////////////////////////////////////////////////////////////////////////
// Define constants for database connectivty
////////////////////////////////////////////////////////////////////////////////
defined('DATABASE_HOST') ? NULL : define('DATABASE_HOST', 'localhost');
defined('DATABASE_NAME') ? NULL : define('DATABASE_NAME', 'izforco1_mya');
defined('DATABASE_USER') ? NULL : define('DATABASE_USER', 'izforco1_mya');
defined('DATABASE_PASSWORD') ? NULL : define('DATABASE_PASSWORD', 'thaivt@@##');

////////////////////////////////////////////////////////////////////////////////
// Define absolute application paths
////////////////////////////////////////////////////////////////////////////////

// Use PHP's directory separator for windows/unix compatibility
defined('DS') ? NULL : define('DS', DIRECTORY_SEPARATOR);

// Define absolute path to server root
defined('SITE_ROOT') ? NULL : define('SITE_ROOT', dirname(dirname(__FILE__)).DS);

// Define absolute path to includes
defined('INCLUDE_PATH') ? NULL : define('INCLUDE_PATH', SITE_ROOT.'includes'.DS);
defined('PUBLIC_PATH') ? NULL : define('PUBLIC_PATH', SITE_ROOT.'public'.DS);
defined('UPLOAD_PATH_IMAGES') ? NULL : define('UPLOAD_PATH_IMAGES', PUBLIC_PATH.'images'.DS);
defined('FUNCTION_PATH') ? NULL : define('FUNCTION_PATH', INCLUDE_PATH.'functions'.DS);
defined('LIB_PATH') ? NULL : define('LIB_PATH', INCLUDE_PATH.'libraries'.DS);
defined('MODEL_PATH') ? NULL : define('MODEL_PATH', INCLUDE_PATH.'models'.DS);
defined('VIEW_PATH') ? NULL : define('VIEW_PATH', INCLUDE_PATH.'views'.DS);

////////////////////////////////////////////////////////////////////////////////
// Include library, helpers, functions
////////////////////////////////////////////////////////////////////////////////
require_once(FUNCTION_PATH.'functions.inc.php');
require_once(LIB_PATH.'database.class.php');
#require_once(MODEL_PATH.'post.model.php');

////////////////////////////////////////////////////////////////////////////////
// Include ADMINS
////////////////////////////////////////////////////////////////////////////////
defined('INCLUDE_PATH_ADMIN') ? NULL : define('INCLUDE_PATH_ADMIN', SITE_ROOT.'tpadmin'.DS);
defined('COLTROLLER_ADMIN') ? NULL : define('COLTROLLER_ADMIN', INCLUDE_PATH_ADMIN.'controller'.DS);
defined('MODEL_ADMIN') ? NULL : define('MODEL_ADMIN', INCLUDE_PATH_ADMIN.'model'.DS);
defined('VIEW_ADMIN') ? NULL : define('VIEW_ADMIN', INCLUDE_PATH_ADMIN.'view'.DS);
defined('API_ADMIN') ? NULL : define('API_ADMIN', INCLUDE_PATH_ADMIN.'api'.DS);
defined('IMG_ADMIN') ? NULL : define('IMG_ADMIN', INCLUDE_PATH_ADMIN.'img'.DS);

DEFINE('ROW_PER_PAGE', 50);

