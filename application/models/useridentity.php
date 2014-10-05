<?php
class UserIdentity extends Model {
	public $_id;
	public $username;
	public $password;
	public $error;
	function __construct() {
       $this->table = 'post';
   }
	public function getRealName(){
		$username = $this->escapeString($this->username);
		$sql = "SELECT id FROM $this->table where id = '" . $username . "'";
		$result = $this->query($sql);
		return $result;
	}

	public function authenticate(){
		$username = $this->escapeString($this->username);
		$password = $this->escapeString($this->password);
		if ($username !== "" && $password !== "") {
			$sql = "SELECT * FROM user where username = '" . $username . "' AND password = '" . $password . "'";
			return $result = $this->query($sql);
		} else {
			 return 0;
		}
	}

	public function getRole(){
		$id = intval($this->_id);
		if (!$id) 
			return 0;
		$sql = "SELECT id FROM $this->table where id = '" . $id;
		return 
			$result = $this->query($sql);
	}

}