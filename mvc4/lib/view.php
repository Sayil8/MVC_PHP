<?php

class View{

	function __construct(){
		
	}

	function render($nombre){

		require 'views/header.php';
		require 'views/'.$nombre.'.php';
		require 'views/footer.php';
	}


}


?>