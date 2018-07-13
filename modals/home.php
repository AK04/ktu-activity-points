<?php

class HomeModel extends Model {

	public function Index(){


		// For session variable requirements
		$this->query('SELECT * FROM PointsTable WHERE User = :username ORDER BY AddDate DESC;');
		$this->bind(':username', $_SESSION['user']);
		$rows = $this->resultSet();

		// To check if student updated information or not
		$this->query('SELECT InfoUpdate FROM users WHERE username = :username;');
		$this->bind(':username', $_SESSION['user']);
		$info = $this->resultSet();
	
		// Gets total points of student
		$this->query('SELECT SUM(Points) as Points FROM PointsTable WHERE user = :username AND Approved = 1;');
		$this->bind(':username', $_SESSION['user']);
		$userPoints = $this->single();
		
		// Update points in user table
		$this->query('UPDATE users SET TotalPoints = :points WHERE username = :username;');
		$this->bind(':username', $_SESSION['user']);
		$this->bind(':points', (int)$userPoints['Points']);

		if($info[0]['InfoUpdate'] == '0' || $info[0]['InfoUpdate'] == null ) {
			Messages::setMsg('Update your information for claiming activity points', 'error');
			$_SESSION['shouldUpdate'] = true;
		}
		else
			$_SESSION['shouldUpdate'] = false;

		return $rows;
	}

	public function updateInfo() {


		$this->query('SELECT * FROM users WHERE username = :username;');
		$this->bind(':username', $_SESSION['user']);		
		$row = $this->single();

		$_SESSION['register'] = $row['RegisterNo'];
		$_SESSION['rollno'] = $row['RollNo'];
		$_SESSION['admno'] = $row['AdmNo'];
		$_SESSION['class'] = $row['Class'];

		$post  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']) {

			if(strlen($post['register']) != 10) {
				Messages::setMsg("Invalid register number", 'error');
				return;
			}


			if(strlen($post['rollno']) != 8) {
				Messages::setMsg("Invalid Roll number information", 'error');
				return;
			}

			if(strlen($post['admno']) != 7) {
				Messages::setMsg("Invalid Admission number information", 'error');
				return;
			}

			if(strlen($post['class']) != 5) {
				Messages::setMsg("Invalid Class information", 'error');
				return;
			}

			$this->query('UPDATE `users` SET `RegisterNo` = :register, `RollNo` = :rollno, `AdmNo` = :admno, `Class` = :class, `InfoUpdate` = :infoupdate WHERE `users`.`username` = :user;');

			$this->bind(':register', $post['register']);
			$this->bind(':rollno', $post['rollno']);
			$this->bind(':admno', $post['admno']);
			$this->bind(':class', $post['class']);
			$this->bind(':infoupdate', true);
			$this->bind(':user', $_SESSION['user']);
			$this->execute();

			header('Location: '. ROOTPATH . '?controller=home');

		}

		return;

	}

}