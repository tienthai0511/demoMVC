<?php 
 
if (!isset($_SESSION['a']) && !$_SESSION['a'] != "") {
	header("Location: /login/index");
}
