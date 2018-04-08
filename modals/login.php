<?php

class LoginModel extends Model{

	public function Index() {

		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);	

		$this->query('SELECT DISTINCT Class FROM users GROUP BY Class;');
		$rows = $this->resultSet();

		$_SESSION['class'] = $rows;

		if($post['submit']) {

			if($post['username'] == 'admin') {

				$this->query('SELECT * FROM users WHERE username = :username AND password = :password AND Class = :class;');
				$this->bind(':username', $post['username']);
				$this->bind(':password', $post['password']);
				$this->bind(':class', $post['class']);
				
				$row = $this->single();

			} 

			else {

				$this->query('SELECT * FROM users WHERE username = :username AND password = :password;');
				$this->bind(':username', $post['username']);
				$this->bind(':password', $post['password']);
				
				$row = $this->single();

			}

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user'] = $row['username'];

				if ($_SESSION['user'] == 'admin') {
					unset($_SESSION['class']);
					$_SESSION['class'] = $post['class'];					
					header('Location: '.ROOT_URL.'?controller=admin');
				} 
				else
					header('Location: '.ROOT_URL.'?controller=home');

			}

			else {
				Messages::setMsg('Incorrect Login', 'error');
			}

		}

		return;

	}

}

