<?php
class SharesModel extends Model{
	public function index(){
		$this->query('SELECT * FROM shares');
		$rows = $this->resultSet();
		return $rows;
		//var_dump($rows);
	}
}

?>