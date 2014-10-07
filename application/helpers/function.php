<?php
/** * @author thaivt <tienthai0511@gmail.com> 
* @copyright Copyright &copy; 2014 TP 
* @license thaivt 
*/

function _randGen($min = null, $max = null) {
	static $seeded;	if (!isset($seeded)) {
		mt_srand((double)microtime()*1000000);
		$seeded = true;
	}
	if (isset($min) && isset($max)) {
		if ($min >= $max) {
			return $min;
		} else {
			return mt_rand($min, $max);
		}
	} else {
		return mt_rand();
	}
}
function _encrypt_password($plain) {
	$password = '';
	for ($i=0; $i<10; $i++) {
		$password .= _randGen();
	}
	$salt = substr(md5($password), 0, 2);
	$password = md5($salt . $plain) . ':' . $salt;
	return $password;
}
function _validate_password($plain, $encrypted) {
	if ($plain && $encrypted) {
		// split apart the hash / salt
		$stack = explode(':', $encrypted);
		if (sizeof($stack) != 2) return false;
		if (md5($stack[1] . $plain) == $stack[0]) return true;
	}
	return false;
}