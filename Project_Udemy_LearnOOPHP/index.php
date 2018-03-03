<?php //include Config
require('config.php');
require('classes\Bootstrap.php');
require('classes\Controller.php');
require('classes\Model.php');
require('controllers\Home.php');
require('controllers\User.php');
require('controllers\Shares.php');


require('models\Home.php');
require('models\User.php');
require('models\Shares.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}

?>