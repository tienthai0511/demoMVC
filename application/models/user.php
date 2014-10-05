<?php

class User extends Model {
	public $id;
	public $title;
	public $content;
	public $created;
	public function getSomething()
	{
		#$id = $this->escapeString();
		$result = $this->query('SELECT * FROM post');
		return $result;
	}
	public function getId($id){
		$id = (int)$this->id;
		#$result = $this->query('SELECT * FROM post where id =13');
		$result1 = sprintf("SELECT * FROM post where id = %d",$id);
		$result = $this->query($result1);
		return $result;
	}
	public function insert() 
	{

$title = $this->content;
$content = $this->title;
		// Build database query
		$dml = sprintf("insert into post (title, content) values ('%s', '%s')", $title, $content);	

		// Execute statement
		return $this->execute($dml);
	}
	public function update() 
	{
		// Open database connection
		
		// Sanitize user input
		$id = (int)$this->id;
		$title = "ádas";
		$content = "ádas";
	
		// Build database query	
		$dml = sprintf("update post set title = '%s', content = '%s' where id = %d", $title, $content, $id);

		// Execute data manipulation
		return $this->execute($dml);
	}

}

?>
