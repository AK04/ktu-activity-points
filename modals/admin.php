<?php

class AdminModel extends Model {

	public function Index() {
		return;
	}

	public function changeStatus() {

		if ($_SESSION['user'] != 'admin') {
			header('Location: '.ROOT_URL);
		}

		$this->query('UPDATE `PointsTable` SET `Approved` = :change WHERE `PointsTable`.`No` = :no;');
		$this->bind(':change',$_GET['change']);
		$this->bind(':no',$_GET['no']);
		$this->execute();

		header('Location: '.ROOT_URL.'?controller=admin&action=pending');

	}

	public function pending() {

		$this->query('SELECT * FROM PointsTable WHERE Approved = 0 OR Approved = NULL');
		$rows = $this->resultSet();
		return $rows;

	}

	public function classList() {

		$this->query('SELECT * FROM users WHERE users.class = :class AND username <> "admin";');
		$this->bind(':class', $_SESSION['class']);
		$rows = $this->resultSet();
		return $rows;

	}

	public function studentProfile() {

		$this->query('SELECT * FROM PointsTable WHERE User = :username ORDER BY AddDate DESC;');
		$this->bind(':username', $_GET['student']);		
		$rows = $this->resultSet();

		return $rows;

	}

}