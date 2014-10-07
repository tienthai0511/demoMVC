<?php
class UserIdentity extends Model {
	public $_table = 'admins';

	public function checkLogin($user, $pass)
	{
		$user = $this->escapeString($user);
		$pass = $this->escapeString($pass);
		$sql  = sprintf("SELECT * FROM %s where Name = '%s'", $this->_table, $user);
		$result = $this->query($sql);

		if (is_array($result) && count($result) == 1) {
			$passData = $result[0]->Password;
			if (!$passData) return false;
			if (_validate_password($pass, $passData)) return $result;
			return false;
		}
		return false;
	}
	public function getRole($id){
		$id = (int)$id;
		$sql  = sprintf("SELECT Role FROM %s where id = '%d'", $this->_table, $id);
		$result = $this->query($sql);
		return $result[0]->Role;
	}

	function getAdminsById(){
		$id = (int)$id;
		$sql  = sprintf("SELECT * FROM %s where id = '%d'", $this->_table, $id);
		$result = $this->query($sql);
		return $result;
	}

}