<?php
class BaseModel{
	protected $_db;
	public function __construct(){
		$this->_db = new Database();

	}
}