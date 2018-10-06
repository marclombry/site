<?php
class Message{
	protected $id;
	protected $title;
	protected $content;
	protected $id_contact;

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

    //setter//
	public function setTitle($title)
    {
        $this->title = $title;
    }

 
	public function setContent($content)
    {
        $this->content = $content;
    }

  
	public function setId_contact($id_contact)
    {
        $this->id_contact = $id_contact;
    }
   


     //getter//
    public function getId()
    {
        return $this->id;
    }

     public function getTitle()
    {
        return $this->title;
    }

     public function getContent()
    {
        return $this->content;
    }

     public function getId_contact()
    {
        return $this->id_contact;
    }
}