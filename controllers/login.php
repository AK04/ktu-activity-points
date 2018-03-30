<?php

class Login extends Controller{

	protected function Index() {

		$viewmodel = new LoginModel();
		$this->returnView($viewmodel->Index(), true);

	}
	
}