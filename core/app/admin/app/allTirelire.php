<?php
require_once("../../../../core/init.php");
$allTirelire = $database->select("SELECT moneys.id as id_money, tirelires.name as proprietaire, tirelires.id as numero_de_tirelire, moneys.valeurs as euros FROM moneys
		 Left join tirelires on moneys.id_tirelire =tirelires.id");
echo json_encode($allTirelire);
