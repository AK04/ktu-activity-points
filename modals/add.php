<?php

class AddModel extends Model {

	public function add() {
		// Sanitize POST
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
			$this->bind(':points', $post['points']); // use a function to calcuate points
			$this->bind(':approval', false);
			$this->bind(':user', $_SESSION['user']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'home');
			}
		}
		return;
	}

}