<?php

class MainLogin extends Controller{

	protected function Index(){
		$viewmodel = new MainModel();
		$this->returnView($viewmodel->Index(), true);
	}
	
	protected function login(){
		$viewmodel = new MainModel();
		$this->returnView($viewmodel->login(), true);
	}

	protected function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_data']);
		session_destroy();
		// Redirect
		header('Location: '.ROOT_URL.'mainLogin');
	}
	
}