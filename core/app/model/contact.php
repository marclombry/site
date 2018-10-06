<?php
class Contact {
	protected $id;
	protected $firstname;
	protected $lastname;
	protected $email;
	protected $phone;
	protected $password;
	protected $new_password;

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

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setNew_password($new_password)
    {
        $this->new_password = $new_password;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

     //getter//
    public function getId()
    {
        return $this->id;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
       return  $this->password;
    }

    public function getNew_password()
    {
        return $this->new_password;
    }

    public function getPhone()
    {
        return $this->phone;
    }
}