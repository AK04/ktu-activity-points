<?php

class LoginModel extends Model{

	public function Index(){

		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);		

		if($post['submit']) {

			$this->query('SELECT * FROM users WHERE username = :username AND password = :password');
			$this->bind(':username', $post['username']);
			$this->bind(':password', $post['password']);
			
			$row = $this->single();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user'] = $row['username'];
				header('Location: '.ROOT_URL.'?controller=home');

			}
			else {
				echo "Error";//Messages::setMsg('Incorrect Login', 'error');
			}

		}

		return;
	}

}

