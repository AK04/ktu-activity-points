<?php

class Bootstrap {

	private $request;
	private $controller;
	private $action;

	public function __construct($request) {

		$this->request = $request;		

		if(!isset($this->request['controller']) || $this->request['controller'] == '') {
			$this->controller = 'mainLogin';
		}
		else {
			$this->controller = $request['controller'];
		}

		if(!isset($this->request['action']) || $this->request['action']== "") {
			$this->action = 'index';
		}
		else {
			$this->action = $request['action'];
		}

	}


	public function createController() {

		if(class_exists($this->controller)) {

			$parents = class_parents($this->controller);

			if(in_array("Controller", $parents)) {

				if(method_exists($this->controller, $this->action)) {
					return new $this->controller($this->action, $this->request);
				}
				else {
					echo '<h1>Method does not exit</h1>';
					return;
				}

			}
			else {
				echo '<h1>Base controller not found</h1>';
				return;
			}

		}

		else {
			echo '<h1>Controller class does not exist</h1>';
			return;
		}

	}

}