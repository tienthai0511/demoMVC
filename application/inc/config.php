<?php 

////////////////////////////////////////////////////////////////////////////////
// Configure the default time zone
////////////////////////////////////////////////////////////////////////////////
date_default_timezone_set('MST');

////////////////////////////////////////////////////////////////////////////////
// Configure the default currency
////////////////////////////////////////////////////////////////////////////////
setlocale(LC_MONETARY, 'en_US');
DEFINE('BASE_URL', 'http://thaivt.com');
DEFINE('default_controller', 'main');
DEFINE('error_controller', 'error');
DEFINE('db_host', 'localhost');
DEFINE('db_name', 'test');
DEFINE('db_username', 'root');
DEFINE('db_password', '');