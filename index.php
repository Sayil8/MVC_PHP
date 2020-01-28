<?php



	function __autoload($class){
		require "lib/$class.php";
	}

	
	require_once 'config/config.php';



	$app = new App();


?>