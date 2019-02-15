<?php

class Sadmin extends Controller {

	protected function Index() {

		if(!isset($_SESSION['is_logged_in']) || $_SESSION['admin'] != 2){
			header('Location: '.ROOT_URL);
		}

		$viewmodel = new SuperAdminModel();
 
		$this->returnView($viewmodel->Index(), true);	

	}

	protected function logout() {

		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user']);
		session_destroy();
		// Redirect
		header('Location: '.ROOT_URL);
		
	}

	



	protected function advisorCreation() {

		$viewmodel = new SuperAdminModel();

		$this->returnView($viewmodel->advisorCreation(), true);

	}

}