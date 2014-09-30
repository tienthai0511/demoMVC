<?php
/*
 * PIP v0.5.3
 */

//Start the Session
session_start(); 

// Defines
defined('DS') ? NULL : define('DS', DIRECTORY_SEPARATOR);
define('ROOT_DIR', realpath(dirname(__FILE__)) . DS);
define('APPLICATION', ROOT_DIR .'application'.DS);


// Includes
require(APPLICATION .'inc/define.php');
require(INC .'config.php');
require(SYS .'model.php');
require(SYS .'view.php');
require(SYS .'controller.php');
require(SYS .'tp.php');

// Define base URL
global $config;

tp();

?>
