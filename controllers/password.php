<?php

class Password extends Controller{

	protected function Index() {

		$viewmodel = new PassModel();
		$this->returnView($viewmodel->Index(), true);

	}

	protected function changePass() {

		

		
	}
	
}