<?php 

class Add extends Controller {

	protected function Index(){
		$viewmodel = new AddModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new AddModel();
		$this->returnView($viewmodel->add(), true);
	}

}