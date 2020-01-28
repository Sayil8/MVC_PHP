<?php

class Create_Model extends Model{

	function __construct(){
		parent::__construct();
	}

	public function insert($data){

		try{
			$query = $this->db->prepare("INSERT INTO users (login, password) VALUES (:name, :pass) ");
			$query->execute(['name' => $data['name'], 'pass' => $data['pass']]);
			return true;
		}catch(PDOException $e){
			echo "Error";
			return false;
		}
	}
}

?>