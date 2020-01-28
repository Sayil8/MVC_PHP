<?php

class Create extends Controller{

	function __construct(){
		parent::__construct();
		$this->view->message = "";
	}

	public function render(){
		$this->view->render('create/index');	
	}

	public function newUser(){
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		if($this->model->insert(['name' => $name, 'pass' => $pass])){
			$this->view->message = "New user Created";
			$this->render();
		}
		else{
			$this->view->message = "ERROR. Could not create User";
			$this->render();
		}
		
	}
}

?>