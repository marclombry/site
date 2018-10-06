<?php

class AuthentifyController{

	public static function index()
	{
		header('location:/tirelire/core/connexion.php');
	}

	public static function Connexion()
	{
		if(isset($_POST)){
			// sécure all variable post
			$_POST = array_map('htmlspecialchars', $_POST);
			//import connection in database
			global $database;
			// secure variable
			$pseudo = isset($_POST['pseudo'])? htmlspecialchars($_POST['pseudo']):'';
			$email = isset($_POST['email'])? htmlspecialchars($_POST['email']):'';
			$password = isset($_POST['password'])? htmlspecialchars($_POST['password']) :''; 
			$secret = isset($_POST['secret'])? htmlspecialchars($_POST['secret']):'';
			// drop a password in authentify table
			$verifPass = $database->select("SELECT password FROM authentify WHERE pseudo = '$pseudo'",true);
			//verify the password in database
			$passVerif = $verifPass ? password_verify($password,$verifPass->password):false;
			// if it's a good password so i start request for recover informations
			if($passVerif){
				$check = $database->select("SELECT id, pseudo, email, password, secret, token, administator FROM authentify WHERE pseudo = '$pseudo' AND email = '$email' AND secret = '$secret' ",true);
			}
			
			//if there is a request and is a good request, i instance new Authentify class
			if(isset($check)){
				$error='';
				$auth = new Authentify();
				$auth->hydrate($check);
				$auth->connexion();
				header('location:/tirelire/');
			
			}else{
				$error = "<div class='alert warning'>Informations incorrect</div>";
				//header('location:/tirelire/');
				//echo $error;
			}
			/*
			if(!empty($pseudo)){
				$check = $database->select("SELECT id, pseudo, email, password, secret, token, administator FROM authentify WHERE pseudo = '$pseudo' AND email = '$email' AND password = '$password' AND secret = '$secret' ",true);
				
				$password = isset($_POST['password'])? password_verify($_POST['password'],$check->password):'';
					// if the information matches that of the database
				if(isset($pseudo) == $check->pseudo && isset($email) == $check->email && isset($password) == $check->password && isset($secret) == $check->secret ){
					$auth = new Authentify();
					$auth->hydrate($check);
					$auth->connexion();
					//header('location:/tirelire/');
				}else{
					var_dump($_POST);
					//header('location:/tirelire/');
				}
			}
			*/
			//une erreur 

		}
		
	}

	public static function Deconnexion(){
		session_destroy();
		header('location:/tirelire/');
	}
}