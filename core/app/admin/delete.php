<?php
require_once("../../../core/init.php");
require('app/controller/adminController.php');
if(isset($_GET['id'])){
	AdminController::delete($_GET['id']);
	header('location:/tirelire/core/app/admin');
}
//require_once('app/view/index.view.php');