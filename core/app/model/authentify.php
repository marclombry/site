<?php
class Authentify{
	private $id;
	private $pseudo;
	private $email;
	private $password;
	private $secret;
	private $token;
	private $administrator;

	public function __construct($valeur = array()){
		if(!empty($valeur))
		{
			$this->hydrate($valeur);
		}
	}
	public function hydrate($donnee){
		if(!empty($donnee)){
			foreach ($donnee as $key => $value) {
				$methode = 'set'.str_replace(' ', '', ucwords(str_replace('_', ' ', $key)));
	                 
	            if (is_callable(array($this, $methode)))
	            {
	                $this->$methode($value);
	            }
				
			}
		}
	}

		public function setId($id)
	{
		$this->id = $id;
	}

	public function setPseudo($pseudo)
	{
		$this->pseudo = $pseudo;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function setSecret($secret)
	{
		$this->secret = $secret;
	}

	public function setToken($token)
	{
		$this->token = $token;
	}

	public function setAdministrator($administrator)
	{
		$this->administrator = $administrator;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getPseudo()
	{
		return $this->pseudo;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function getSecret()
	{
		return $this->secret;
	}

	public function getToken()
	{
		return $this->token;
	}

	public function getAdministrator()
	{
		return $this->administrator;
	}

	public function connexion()
	{
		if(!isset($_SESSION['auth'])){
			$_SESSION['auth']['id'] = $this->getId();
	 	    $_SESSION['auth']['pseudo'] = $this->getPseudo();
	 	    $_SESSION['auth']['email'] = $this->getEmail();
	 	    $_SESSION['auth']['password'] = $this->getPassword();
	 		$_SESSION['auth']['secret'] = $this->getSecret();
	 	    $_SESSION['auth']['token'] = $this->getToken();
	 	    $_SESSION['auth']['administrator'] = $this->getAdministrator();
	 
		}

		return $_SESSION['auth'];
	 

	}



}