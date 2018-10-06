<?php
session_start();
define('RACINE', $_SERVER['REQUEST_URI']);
$error='';



$config=require_once('app/database/config.php');
require_once('app/database/database.php');
require_once('app/database/table.php');
$database= new Database($config);
require_once('app/model/piece.php');
require_once('app/model/billet.php');
require_once('app/model/tirelire.php');
require_once('app/model/authentify.php');

$piece = new Piece();
$billet = new Billet();
$tirelire = new tirelire();

require_once('app/form.php');

require_once('app/controller/tirelireController.php');
require_once('app/controller/authentifyController.php');