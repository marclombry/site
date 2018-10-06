<?php
class AdminController{


	public static function create($post){
		global $database;
		if(isset($_POST)){
			$_POST = array_map('htmlspecialchars',$_POST);
			$donnee = [
				':valeurs'=>$_POST['valeurs'],
				':id_tirelire'=>$_POST['id_tirelire']
			];
			$database->inserting($donnee);
		}
	}

	public static function delete($id){
		global $database;
		if(isset($_GET['id'])){
			$id = htmlspecialchars($_GET['id']);
			$database->delete($id,'moneys');
		}
		
	}



}
