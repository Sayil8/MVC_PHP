<?php

class Controller{

	function __construct(){
		
		$this->view = new View();
	}


	function loadModel($name){
		$url = 'models/'.$name.'_model.php';

		if(file_exists($url)){
			require $url;

			$modelName = $name.'_Model';
			$this->model = new $modelName();

		}
	}

}




?>