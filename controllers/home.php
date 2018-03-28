<?php

class Home extends Controller {

	protected function Index() {

		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->Index(), true);

	}

	protected function add() {

		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'mainLogin');
		}

		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->add(), true);
		
	}

}