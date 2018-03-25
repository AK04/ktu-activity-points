<?php

session_start();

require('config.php');

require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}
