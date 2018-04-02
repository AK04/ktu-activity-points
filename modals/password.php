<?php

class PassModel extends Model {

	public function Index() {

		$this->query('SELECT password FROM users WHERE username = :user');
		$this->bind(':user', $_SESSION['user']);
		$rows = $this->resultSet();

		$post  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']) {


			if ($post['current_pass'] != $rows[0]['password']) {
				Messages::setMsg('Current Password is wrong', 'error');
			}

			elseif ($post['new_pass'] != $post['check_new_pass']) {
				Messages::setMsg('Repeated password is wrong', 'error');
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