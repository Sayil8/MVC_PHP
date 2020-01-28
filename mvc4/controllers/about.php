<?php

class About extends Controller{

	function __construct(){
		parent::__construct();
	}

	public function render(){
		$this->view->render('about/index');
	}
}


?>