<?php

//Start the Session
session_start(); 

// Defines
defined('DS') ? NULL : define('DS', DIRECTORY_SEPARATOR);
define('ROOT_DIR', realpath(dirname(__FILE__)) . DS);
define('APPLICATION', ROOT_DIR .'application'.DS);


echo 1;

?>
