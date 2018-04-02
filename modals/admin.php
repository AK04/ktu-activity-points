<?php

class AdminModel extends Model {

	public function Index() {
		$this->query('SELECT * FROM PointsTable WHERE Approved = 0 OR Approved = NULL');
		$rows = $this->resultSet();
		return $rows;
	}

	public function changeStatus() {

		if ($_SESSION['user'] != 'admin') {
			header('Location: '.ROOT_URL);
		}

		$this->query('UPDATE `PointsTable` SET `Approved` = :change WHERE `PointsTable`.`No` = :no;');
		$this->bind(':change',$_GET['change']);
		$this->bind(':no',$_GET['no']);
		$this->execute();

		header('Location: '.ROOT_URL.'?controller=admin');

	}

}