<?php

include_once 'models/users.php';

class Manage_Model extends Model{


	function __construct(){
		parent::__construct();
	}


	public function get(){

		$items = [];


		try{

			$query = $this->db->query("SELECT * FROM users");

			while($row = $query->fetch()){
				$item = new Users();
				$item->id = $row['id'];
				$item->name = $row['login'];
				$item->pass = $row['password'];

				array_push($items, $item);
			}

			return $items;

		}catch(PDOException $e){
			return [];
		}
	}



	public function getById($id){
		$item = new Users();
		$query = $this->db->prepare("SELECT * FROM users WHERE id = :id ");

		try{
			$query->execute(['id' => $id]);

			while ($row = $query->fetch()) {
				$item->id = $row['id'];
				$item->name = $row['login'];
				$item->pass = $row['password'];
			}

			return $item;
		}catch(PDOException $e){
			return null;
		}
	}

	public function update($data){

		$query = $this->db->prepare("UPDATE users SET login = :name, password = :pass WHERE id = :id ");

		try{

			$query->execute([
				'name' => $data['name'],
				'pass' => $data['pass'],
				'id' => $data['id']
			]);

			return true;
		}catch(PDOException $e){
			return false;
		}
	}

	public function delete($id){

		try{
			$query = $this->db->query("DELETE FROM users WHERE id = '$id'");
			return true;
		}catch(PDOException $e){
			return false;
		}
	}
}




?>