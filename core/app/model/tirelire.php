<?php
Class Tirelire {
	private $id;
	//private $id_piece;
	//private $id_billet;
    private $name;
	

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

	//setter//
	public function setId($id)
    {
        $this->id = $id;
    }

    public function setIdPiece($piece)
    {
        $this->id_piece = $piece;
    }

    public function setIdBillet($billet)
    {
        $this->id_billet = $billet;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
   

    //getter//
    public function getId()
    {
        return $this->id;
    }

    public function getIdPiece()
    {
       return $this->id_piece ;
    }

    public function getIdBillet()
    {
       return $this->id_billet;
    }

    public function getName()
    {
        return $this->name;
    }

   // methode pour calculer la somme de toutes les pieces ou billet //
    /*
        on parcours le tableau et on additionne chaque valeur

    */
    public function sumMoney($sum){
        return array_reduce($sum, function($item,$v){ 
            return $item+=$v;
        });

    }
}