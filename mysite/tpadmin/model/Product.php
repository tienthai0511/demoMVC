<?php
/*
 * @access  public
 * @author  ThaiVT <tietnhai0511@gmail.com>
 * @create  2014/10/14
 * @version 0.1
 **/
class Product  extends BaseModel
{
	public $id;
	public $name;
	public $price;
	public $img;
	public $content;
	public $created;
	public $modified;
	public $_table;

	public function __construct(){
		parent::__construct();
		$this->_table = 'product';
	}
	public  function getBySql($sql) {
		return $this->_db->executeSql($sql);
	}

	public  function getById($id) {
		// Sanitize user input
		$id = (int)$id;
		// Build database query
		$sql = sprintf("select * from $this->_table where id = %d limit 1", $id);
		// Execute database query
		return self::getBySql($sql);
	}

	public  function getAll($Condition = NULL, $pageLimit, $rowPerPage){
		// Build database query
		$sql = " select * ";
		$sqlCon = " from $this->_table ";
		$sqlCon .= " where id > 0 ";
		if ($Condition) {
			$sqlCon .= " AND $Condition";
		}
		$sqlLimit = " GROUP BY id ORDER BY id";
		$sqlLimit .= " limit $pageLimit, $rowPerPage";
		
		$sqlDml = $sql . $sqlCon . $sqlLimit;
		$sqlCount = "SELECT count(*) AS total " . $sqlCon . " limit 1";
		// Execute database query
		$Total = $this->_db->getOneResult($sqlCount)->total;
		
		$result['total'] = $Total;
		$result['data'] = self::getBySql($sqlDml);
		return $result;
	}

	public function insert() {

		// Sanitize user input
		$name = $this->_db->sanitizeInput($this->name);
		$active = $this->_db->sanitizeInput($this->active);
		$delete = $this->_db->sanitizeInput($this->delete);
		$created = 'NOW()';
		$modified = 'NOW()';

		// Build database query
		$sql = sprintf("insert into $this->_table (`name`, `active`, `delete_flag`, `created`, `modified`) values ('%s', '%d', '%d', %s, %s)", $name, $active, $delete, $created, $modified);
print_r($sql);
		// Execute statement
		return $this->_db->executeDml($sql);
	}

	public function update() {
		// Sanitize user input
		$id = (int)$this->id;
		$name = $this->_db->sanitizeInput($this->name);
		$active = $this->_db->sanitizeInput($this->active);
		$delete = $this->_db->sanitizeInput($this->delete);
		$modified = 'NOW()';
		// Build database query	
		$dml = sprintf("update $this->_table set `name` = '%s', `active` = '%d', `modified` = %s where id = %d", $name, $active, $modified, $id);
		// Execute data manipulation
		echo "updae";
		return $this->_db->executeDml($dml);
	}

	public function delete() 
	{
		// Open database connection
		$database = new Database();

		// Sanitize user input
		$id = (int)$this->id;
		
		// Build database query
		$dml = sprintf("delete from post where id = %d limit 1", $id);

		// Execute data manipulation
		return $this->_db->executeDml($dml);
	}

	public function save() 
	{
		// Check object for id

		if (isset($this->id) && ($this->id) > 0) {
			// Return update when id exists
			return $this->update();
		} else {
			// Return insert when id does not exists
			return $this->insert();
		}
	}

	public function search($condition){
		
	}

}