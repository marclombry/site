<?php
class Database extends PDO{
	protected $pdo;
	protected $config=[];
	protected $table ='tirelires';

	public function __construct(array $config){
		$this->config = $config;
		//var_dump($this->config['host']);die();
		if(empty($this->pdo)){
			$this->pdo = new PDO("mysql:host=$config[host];dbname=$config[dbname]","$config[username]" ,"$config[password]");
			//$this->pdo = new PDO('mysql:host=localhost;dbname=linker','root','');
		}
		return $this->pdo;
	}

	public function select($query,$one=null){
		if($one){
			return $this->pdo->query($query)->fetch(PDO::FETCH_OBJ);
		}
		return $this->pdo->query($query)->fetchAll(PDO::FETCH_OBJ);
	}
	
	public function selPrepare($query,$donne,$one=null){
		if($one){
			return $this->pdo->prepare($query)->execute($donne)->fetch(PDO::FETCH_OBJ);
		}
		return $this->pdo->prepare($query)->execute($donne)->fetchAll(PDO::FETCH_OBJ);
	}
	
	public function all($one=null){
		if($one){
			return $this->pdo->query("SELECT * FROM $this->table")->fetch(PDO::FETCH_OBJ);
		}
		return $this->pdo->query("SELECT * FROM $this->table")->fetchAll(PDO::FETCH_OBJ);
	}

	public function insert($donne){
		$q = $this->pdo->prepare("INSERT INTO $this->table (value) VALUES (:value)");
		$q->execute($donne);
	}

	public function inserting($donne){
		$q = $this->pdo->prepare("INSERT INTO moneys (valeurs,id_tirelire) VALUES (:valeurs,:id_tirelire)");
		$q->execute($donne);
	}

	public function delete($id,$table){
		$q = $this->pdo->query("DELETE FROM $table WHERE id = $id");
		$q->execute();
	}

	public function update($id,$table,$donne){
		
		$q = $this->pdo->prepare("UPDATE $table SET value =:value WHERE id = $id ");
		$q->execute($donne);
		/*
		$q = $this->pdo->prepare("UPDATE $table SET name =:name,color =:color, photo=:photo
		href = :href, category = :category WHERE id = $id ");
		$q->execute($donne);
		*/

	}

	public function setTable($table){
		$this->table = $table;
	}

	public function getTable(){
		return $this->table;
	}
}