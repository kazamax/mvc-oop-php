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
		/* recorto la palabra Controller de todos los controllers para que los modelos sean encontrados mas facil */
		$controller = substr(get_class($this), 0,5);
		/*Le pasamos el titulo de la pagina dinamicamente*/
		$title = 'Pagina de inicio - MVC';
		$this->view->render($controller, 'index',$title);
	}

}