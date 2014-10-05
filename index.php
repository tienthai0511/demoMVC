<?php

//Start the Session
session_start(); 
// Includes
require('application/inc/define.php');
require(INC .'config.php');
require(SYS .'model.php');
require(SYS .'view.php');
require(SYS .'controller.php');
require(SYS .'tp.php');
include(API.'JSON.php');
$SESSION['acb'] = 'asds';
// Define base URL
global $config;
if (!isset($SESSION['acb'])){
	echo "chwa login";
} else {
	tp();
}

?>
