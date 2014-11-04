<?php
function __autoload($class_name) {
	$fileClass = MODEL_PATH . $class_name . '.php';

	if(file_exists($fileClass)) {
		require_once($fileClass);    
	} else {
		throw new Exception("Unable to load $class_name");
	}

}
