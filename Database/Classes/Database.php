<?php
class Database{
	private $host = 'localhost';
	private $user = 'phplearning';
	private $pass = 'root';
	private $dbname = 'phplearning'; 

	private $dbh;//databse handler
	private $error;//
	private $stmt;//statement- prepared statement


	public function __construct(){
		//set DSN
		$dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
		//Set options
		$option = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);

		//Create new PDO
		try{
			$this->dbh = new PDO($dsn, $this->user,$this->pass,$option);

		}catch(PDOException $e){
			$this->error = $e->getMessage();
		}
	}

	public function query($query){
		$this->stmt = $this->dbh->prepare($query);
	}

	public function bind($param, $value, $type = null){
		if(is_null($type)){

			switch(true){
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindValue($param,$value,$type);
	}

	public function execute(){
		return $this->stmt->execute();
	}

	public function resultSet(){
		$this->execute();
		return $this->stmt->fetchALL(PDO::FETCH_ASSOC);
		/*return $this->stmt->fetchALL();*//*$this->stmt->fetchALL(PDO::FETCH_ASSOC);*/
	}

/*	public function sqlInject($command){
		$this->stmt->execute($command);
		return $this->stmt->fetchALL(PDO::FETCH_ASSOC);
	}
*/

	public function insert($title,$body=" "){
		$sql="INSERT INTO myblog (title, body) values(?,?);";
		$this->stmt = $this->dbh->prepare($sql);
		$this->stmt->bindValue(1,$title);
		$this->stmt->bindValue(2,$body);
		$this->stmt->execute();
		return $this->dbh->lastInsertId();
	}

	public function update($id,$title,$body=" "){
		$sql="UPDATE myblog set title= ? ,body=? WHERE id =?;";
		$this->stmt = $this->dbh->prepare($sql);
		$this->stmt->bindValue(1,$title);
		$this->stmt->bindValue(2,$body);
		$this->stmt->bindValue(3,$id);
		$this->stmt->execute();
	}

	public function delete($id){
		$sql="DELETE from myblog WHERE id =?;";
		$this->stmt = $this->dbh->prepare($sql);
		$this->stmt->bindValue(1,$id,PDO::PARAM_INT);
		$this->stmt->execute();

	}

}

?>