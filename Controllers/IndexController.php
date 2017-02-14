<?php

/**
* 
*/
class IndexController extends MainControllers {

	private $data;

	function __construct(){

		parent::__construct();
	}

	public function index(){

		$this->data = $this->model->getData();
		$data= $this->data;
		
		$this->view->render($this, 'index', $data);
	}
}