<?php

class tirelireController{

	public static function index()
	{
		//récupération du json//
		global $database;
		global $content;
		global $total;
		/*
		 $total = $database->select("SELECT pieces.value as moneys FROM pieces WHERE id_tirelire = 2
		UNION ALL
		SELECT billets.value FROM billets WHERE id_tirelire = 2");
		*/
		$total = $database->select("SELECT tirelires.name as proprietaire, tirelires.id as numero_de_tirelire, moneys.valeurs as euros FROM moneys
		 Left join tirelires on moneys.id_tirelire =tirelires.id");
		$content.="<div class='contentBlock'>";
		foreach ($total as $key => $value) {
			$value->euros = $value->euros < 1 ? $value->euros.' centimes.': $value->euros.' euros.'; 
			$content.="<p>$value->euros <span class='glyphicon glyphicon-eur'></span></p> ";

		}
		$content.="</div>";
	}
}