<?php
require_once('init.php');
if(isset($_SESSION['auth'])){header('location:/tirelire/');}
AuthentifyController::Connexion();
if(isset($_GET['deco'])){
	AuthentifyController::Deconnexion();
}
require_once('app/view/connection.view.php');