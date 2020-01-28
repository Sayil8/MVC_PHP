<?php


class Database extends PDO{

	private $host;
	private $db;
	private $user;
	private $pass;
	private $type;


	public function __construct(){
		$this->host = constant('HOST');
		$this->db = constant('DB');
		$this->user = constant('USER');
		$this->pass = constant('PASS');
		$this->type = constant('BD_TYPE');

		parent::__construct($this->type.":host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);
	}
	

}


?>