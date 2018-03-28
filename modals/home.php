<?php

class HomeModel extends Model {

	public function Index(){
		$this->query('SELECT * FROM Points-Table WHERE User == :username');
		$this->bind(':username', $_SESSION['username']);
		$rows = $this->resultSet();
		return $rows;
	}

}