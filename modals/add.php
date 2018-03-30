<?php

class AddModel extends Model {

	public function Index() {

		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['activity'] == '' || $post['level'] == ''){
				echo "error"; //Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}

			// Insert into MySQL
			$this->query('INSERT INTO Points-Table (Activity, Level, Points, Approved, User) VALUES(:activity, :level, :points, :approval, :user)');

			$this->bind(':activity', $post['activity']);
			$this->bind(':level', $post['level']);
			$this->bind(':points', $post['points']); 
			$this->bind(':approval', false);
			$this->bind(':user', $_SESSION['user']);
			$this->execute();

			if($this->lastInsertId()){

				header('Location: '.ROOT_URL.'?controller=home');
			}
			else {
				echo "error";
			}

		}

		return;

	}

}