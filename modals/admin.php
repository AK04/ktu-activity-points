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

	public function addComments() {

		if ($_SESSION['user'] != 'admin') {
			header('Location: '.ROOT_URL);
		}

		$this->query('UPDATE `PointsTable` SET `Comments` = :comments WHERE `PointsTable`.`No` = :no;');
		$this->bind(':comments',$_GET['comments']);
		$this->bind(':no',$_GET['slno']);
		$this->execute();

		header('Location: '.ROOT_URL.'?controller=admin&action=pending');

	}

	public function queries() {


		return;


	}

	public function userCreation() {

		if ($_SESSION['user'] != 'admin') {
			header('Location: '.ROOT_URL);
		}

		$post  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$this->query('SELECT COUNT(*) FROM users WHERE Class = :class;');
		$this->bind(':class', $_SESSION['class']);		
		$row = $this->single();

		if ($post['submit'] == "Add") {

			if($row['COUNT(*)'] > 65 || $row['COUNT(*)'] + (int)$post['number'] > 60) {
				Messages::setMsg("More than 65 students for one class is not possible", 'error');
				return;
			}	

			for ($i = 1; $i <= (int)$post['number'] ; $i++) { 

				$this->query('INSERT INTO users (username, password, Admin, class) VALUES (:username , :password, :Admin, :Class); ');

				$namesake = $_SESSION['class'] . (string)$i;

				$this->bind(':username', $namesake);
				$this->bind(':password', $namesake);
				$this->bind(':Admin', 0);
				$this->bind(':Class', $_SESSION['class']);
				$this->execute();

			}

			header('Location: '. ROOTPATH . '?controller=admin');

			return;

		}

		if ($post['submit'] == "Delete") {

			for ($i = (int)$post['from'] ; $i <= (int)$post['till'] ; $i++) { 

				$this->query('DELETE FROM users WHERE username = :username AND class = :Class;');

				$namesake = $_SESSION['class'] . (string)$i;

				$this->bind(':username', $namesake);
				$this->bind(':Class', $_SESSION['class']);
				$this->execute();

			}

			header('Location: '. ROOTPATH . '?controller=admin');

			return;

		}


		return;


	}

}