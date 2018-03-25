<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require('config.php');


require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/mainLogin.php');

require('modals/mainLogin.php');

require('views/main.php');
require('views/add/index.php');
require('views/home/index.php');
require('views/mainLogin/index.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}
