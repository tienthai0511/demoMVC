<?php

class News  extends BaseModel
{
	public $id;
	public $title;
	public $content;
	public $created;

	public function __construct(){
		parent::__construct();
	}
	public  function getBySql($sql) 
	{
		// Instantiate database object
		
		
		// Execute database query
		return $this->_db->executeSql($sql);
	}

	public  function getById($id) 
	{
		// Sanitize user input
		$id = (int)$id;
		
		// Build database query
		$sql = sprintf("select * from post where id = %d limit 1", $id);
		
		// Execute database query
		return self::getBySql($sql);					
	}

	public  function getAll() 
	{
		// Build database query
		$sql = 'select * from post';

		// Execute database query
		return self::getBySql($sql);
	}

	public function insert() 
	{
		// Open database connection
	

		// Sanitize user input
		$title = $this->_db->sanitizeInput($this->title);
		$content = $this->_db->sanitizeInput($this->content);	

		// Build database query
		$dml = sprintf("insert into post (title, content) values ('%s', '%s')", $title, $content);	

		// Execute statement
		return $this->_db->executeDml($dml);
	}

	public function update() 
	{
		// Open database connection
		$database = new Database();

		// Sanitize user input
		$id = (int)$this->id;
		$title = $this->_db->sanitizeInput($this->title);
		$content = $this->_db->sanitizeInput($this->content);
	
		// Build database query	
		$dml = sprintf("update post set title = '%s', content = '%s' where id = %d", $title, $content, $id);

		// Execute data manipulation
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
		if (isset($this->id)) 
		{	
			// Return update when id exists
			return $this->update();
			
		} 
		else 
		{
			// Return insert when id does not exists
			return $this->insert();
		}
	}	
}