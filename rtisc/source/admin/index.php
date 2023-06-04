<?php

session_start();
// Include Config
require('../include/config.php');

require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/home.php');
require('controllers/dashboard.php');
require('controllers/transcation.php');
require('controllers/users.php');
require('controllers/plan.php');
require('controllers/member.php');

require('models/home.php');
require('models/dashboard.php');
require('models/transcation.php');
require('models/user.php');
require('models/plan.php');
require('models/member.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}