<?php

class HomeModel extends Model {

	public function Index(){
		$this->query('SELECT * FROM PointsTable WHERE User = :username ORDER BY AddDate DESC');
		$this->bind(':username', $_SESSION['user']);
		$rows = $this->resultSet();
		return $rows;
	}

}