<?php 

class Add extends Controller {

	protected function Index(){

		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}

		$viewmodel = new AddModel();
		$this->returnView($viewmodel->Index(), true);
		
	}

}