<?php
require_once("../../../core/init.php");
require('app/controller/adminController.php');
if(isset($_POST) && !empty($_POST)){
	//$donnee = array_map('htmlspecialchars',$_POST);
	AdminController::create($_POST);
	//var_dump($_POST);
}
require_once('app/view/create.view.php');
