<?php

class MainLogin extends Controller{

	protected function Index() {

		$viewmodel = new MainModel();
		$this->returnView($viewmodel->Index(), true);

	}
	
}