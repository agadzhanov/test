<?php



class BaseModel
{

    public function __construct($connection, $tableName,)
    {
	$tableName = mysqli_real_escape_string($tableName);
	$query = "SHOW COLUMNS FROM '$tableName'";
    }
}

class MyORM
{	
    private $db;

    public function __construct($user, $pass, $port, $host, $dbName)
    {
	$this->db = new mysqli($host, $user, $pass, $dbName);

	if ($mysqli->connect_errno) {
 	    throw new Exception ('DB connection error');
	}
    }
    
    public function getModel($tableName)
    {
        return new BaseModel($this->db, $tablename);
    }

}
