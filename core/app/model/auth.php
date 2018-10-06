<?php
class Auth {
	protected $id;
	protected $email;
	protected $password;
	protected $admin;

	public function __construct($value=array())
	{
		if(!empty($value)){
			$this->hydrate($value);
		}
	}

	public function  hydrate($donnee)
	{
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

	//setter//
	public function setId($id)
    {
        $this->id = $id;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }

     //getter//
    public function getId()
    {
        return $this->id;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
       return  $this->password;
    }

    public function getAdmin()
    {
        return $this->admin;
    }

    public function connexion()
    {
        if(!empty($_POST)){
            if(isset($_POST['email']) == $this->getEmail() && $_POST['password'] == $this->getPassword())
            {
                $_SESSION['auth']['email']=$this->getEmail();
                $_SESSION['auth']['password']=$this->getPassword();
            }
        }
              
    }
}