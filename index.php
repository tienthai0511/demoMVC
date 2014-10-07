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
include(HELPERS . 'function.php');
tp();
