<?php

class PassModel extends Model {

	public function Index() {

		$this->query('SELECT password FROM users WHERE username = :user');
		$this->bind(':user', $_SESSION['user']);
		$rows = $this->resultSet();

		$post  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']) {

			/*
			var_dump($rows);
			die(var_dump($post));
*/

			if ($post['current_pass'] == $rows['password']) {
				echo "Current Password is wrong";
				header('Location: '.ROOT_URL.'?controller=password');
			}

			elseif ($post['new_pass'] !== $post['check_new_pass']) {
				echo "Repeated password is wrong";
				header('Location: '.ROOT_URL.'?controller=password');
			}

			else {

				$this->query('UPDATE `users` SET `password` = :new_pass WHERE `users`.`username` = :user;');
				$this->bind(':new_pass', $post['new_pass']);
				$this->bind(':user', $_SESSION['user']);
				$this->execute();

				header('Location: '.ROOT_URL.'?controller=home');

			}

		}

	}

}