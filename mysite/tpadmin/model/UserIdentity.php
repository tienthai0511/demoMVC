<?php
class UserIdentity extends BaseModel {
	public $id;
	public $Name;
	public $Password;
	public $Role;
	public $DispName;
	public $Sessionkey;
	public $Delete_flag;
	public $Created;
	public $Modified;
	public $_table;

	public function __construct(){
		parent::__construct();
		$this->_table = 'admins';
	}

	public function checkLogin($user, $pass) {
		$user = $this->_db->sanitizeInput($user);
		$pass = $this->_db->sanitizeInput($pass);
		$sql  = sprintf("SELECT * FROM %s where Name = '%s'", $this->_table, $user);
		$result = $this->_db->getOneResult($sql);
		if ($result->Password != "" && $result->Name != "") {
			$passData = $result->Password;
			if (!$passData) return false;
			if (_validate_password($pass, $passData)) return $result;
			return false;
		}
		return false;
	}
}