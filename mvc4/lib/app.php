<?php

class App{

	function __construct(){

		//limpiamos el url
		$url = isset($_GET['url']) ? explode('/', filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL)) : null;

		//si url esta vacio entonces estamos en el index
		if(empty($url[0])){
			require 'controllers/main.php';
			$controller = new Main();
			$controller->render();
			return false;
		}

		//si no esta vacio, verificamos la existencia del controlador
		$file = 'controllers/'.$url[0].'.php';
		if(file_exists($file))
			require $file;
		else{
			$this->error();
			return false;
		}

		//si existe el contolador lo creamos con la variable url y habilitamos la vista
		$controller = new $url[0];
		//$controller->render();
		//creamos el modelo si es necesario
		$controller->loadModel($url[0]);


		//ejecutamos el metodo si existe
		if(isset($url[2])){
			if(method_exists($controller, $url[1])){
				$controller-> {$url[1]}($url[2]);
				
			}
			else{
				$this->error();
				
			}
		}else
		{
			if(isset($url[1])){
				if(method_exists($controller, $url[1])){
					$controller-> {$url[1]}();
				}
				else
					$this->error();
			}
			else{
					$controller->render();
			}
			
		}


	}


	private function error(){
		require 'controllers/err.php';
		$err = new Err();
		return false;
	}

}



?>