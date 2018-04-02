<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require('config.php');

require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/login.php');
require('controllers/admin.php');
require('controllers/home.php');
require('controllers/add.php');
require('controllers/password.php');

require('modals/login.php');
require('modals/admin.php');
require('modals/home.php');
require('modals/add.php');
require('modals/password.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}
