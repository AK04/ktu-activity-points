<?php

class Admin extends Controller {

	protected function Index() {

		if(!isset($_SESSION['is_logged_in']) || $_SESSION['user'] != 'admin'){
			header('Location: '.ROOT_URL);
		}

		$viewmodel = new AdminModel();
 
		$this->returnView($viewmodel->Index(), true);	

	}

	protected function logout() {

		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user']);
		session_destroy();
		// Redirect
		header('Location: '.ROOT_URL);
		
	}

	protected function changeStatus() {

		$viewmodel = new AdminModel(); 
		$this->returnView($viewmodel->changeStatus(), true);
		
	}

	protected function pending() {

		$viewmodel = new AdminModel();
		$this->returnView($viewmodel->pending(), true);

	}

	protected function classList() {

		$viewmodel = new AdminModel();
		$this->returnView($viewmodel->classList(), true);

	}

}