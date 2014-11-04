<?php

class Database 
{
	private $connection;
	private $hostname;
	private $username;
	private $password;
	private $database;

	public function __construct()
	{
		$this->hostname = DATABASE_HOST;
		$this->username = DATABASE_USER;
		$this->password = DATABASE_PASSWORD;
		$this->database = DATABASE_NAME;
	}

	public function openConnection()
	{
		// Open database connection
		$this->connection = mysql_connect($this->hostname, $this->username, $this->password) 
			or die(mysql_error());
		
		// Select target database
		mysql_select_db($this->database, $this->connection) 
			or die(mysql_error());
	}

	public function closeConnection()
	{
		if (isset($this->connection)) {
			// Close database connection
			mysql_close($this->connection) 
				or die(mysql_error());
		}
	}

	public function executeStatement($statement)
	{
		// Open database connection
		$this->openConnection();
		
		// Execute database statement
		$result = mysql_query($statement, $this->connection) 
			or die(mysql_error());

		// Close database connection
		$this->closeConnection();
		
		// Return result
		return $result;
	}
	public function getOneResult($sql) {
		$result = $this->executeStatement($sql);
		if(mysql_num_rows($result) == 1) 
		{
			// Fetch one row from the result
			$dataset = mysql_fetch_object($result);
		} 
		// Close database cursor
		mysql_free_result($result);
		return $dataset;
	}
	public function executeSql($sql)
	{
		// Execute database statement		
		$result = $this->executeStatement($sql);
		
		// Check number of rows returned
		if(mysql_num_rows($result) == 1) 
		{
			// Fetch one row from the result
			$dataset[0] = mysql_fetch_object($result);
		} 
		else 
		{
			// Fetch multiple rows from the result
			$dataset = array();		

			while ($row = mysql_fetch_object($result)) {

				$dataset[] = $row;
			}
		}
		
		// Close database cursor
		mysql_free_result($result);
		
		// Return dataset
		return $dataset;
	}

	public function executeDml($dml)
	{
	$this->openConnection();
		// Execute database statement
		$result = mysql_query($dml, $this->connection) ;
		#return 1;

		// Return affected rows
		return mysql_affected_rows();
	}
		
	public function sanitizeInput($value)
	{
		$this->openConnection();
		if (function_exists('mysql_real_escape_string')) 
		{
			if (get_magic_quotes_gpc())	
			{
				// Undo magic quote effects
				$value = stripslashes($value);
			}
			// Redo escape using mysql_real_escape_string
			$value = mysql_real_escape_string($value);
		} 
		else 
		{
			if (!$this->get_magic_quotes_gpc())	
			{
				// Add slashed manually
				$value = addslashes($value);
			}
		}
		
		// Return sanitized value
		return $value;
	}
}