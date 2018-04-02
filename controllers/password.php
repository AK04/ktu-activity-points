<?php

class Password extends Controller{

	protected function Index() {

		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}

		$viewmodel = new PassModel();
		$this->returnView($viewmodel->Index(), true);

	}

}