<?php

class AdminModel extends Model {

	public function Index(){
		$this->query('SELECT * FROM PointsTable WHERE Approved = 0');
		$rows = $this->resultSet();
		return $rows;
	}

}