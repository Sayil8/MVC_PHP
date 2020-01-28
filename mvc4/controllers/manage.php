<?php

class Manage extends Controller{

	function __construct(){
		parent::__construct();
		$this->view->data = [];

		$this->view->message = "";
	}

	public function render(){
		$users = $this->model->get();
		$this->view->data = $users;
		$this->view->render('manage/index');
	}

	public function showUser($id){
		
		$user = $this->model->getById($id);
		$this->view->user = $user;
		$this->view->render('manage/detail');
		if(!isset($_SESSION))
			session_start();
		
		$_SESSION['id'] = $user->id;
	}

	public function updateUser(){
		
		if(!isset($_SESSION))
			session_start();
		
		$id = $_SESSION['id'];
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		
		unset($_SESSION['id']);

		if($this->model->update(['id' => $id, 'name' => $name, 'pass' => $pass])){

			$user = new Users();
			$user->id = $id;
			$this->view->message = "update succesfull";
			$this->showUser($id);

		}else{
			$this->view->message = "update Failed";
		}
	}

	public function deleteUser($id){
		
		if($this->model->delete($id)){
			$this->view->message = "User deleted";
			$this->render();
		}else
			$this->view->message = "Delete failed";
	}
}




?>