<?php

class Piece {

	private $id;
	private $value;
	private $id_tirelire;

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

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function setIdTirelire($id_tirelire)
    {
        $this->id_tirelire = $id_tirelire;
    }


   

    //getter//
    public function getId()
    {
        return $this->id;
    }

    public function getValue()
    {
       return $this->value ;
    }

    public function getIdTirelire()
    {
       return $this->id_tirelire ;
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