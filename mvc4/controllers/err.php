<?php


class Err extends Controller{

	function __construct(){
		parent::__construct();
		$this->view->message = "404";
		$this->view->render('err/index');
	}



}



?>