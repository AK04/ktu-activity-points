<?php

class Home extends Controller {

	protected function Index() {

		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}

		$viewmodel = new HomeModel();

		$this->returnView($viewmodel->Index(), true);

	}

	protected function logout() {

		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user']);
		session_destroy();
		// Redirect
		header('Location: '.ROOT_URL);
		
	}

	protected function updateInfo() {

		$viewmodel = new HomeModel();

		$this->returnView($viewmodel->updateInfo(), true);

	}

}