<?php

/**
* 
*/
class  UsuariosController extends MainControllers
{    
	
	function __construct()
	{
		parent::__construct();
	}

	public function index(){

		/* recorto la palabra Controller de todos los controlers para que los modelos sean encontrados mas facil con substr*/
		
		$usuario = Session::getSession('email');
		if ($usuario != '') {
			$controller = substr(get_class($this), 0,8);
			$title = 'Pagina principal de admin';
			$this->view->render($controller, 'index', $title);
		}else{
			header('location:'.PATH_U.'?message=Primero debes iniciar sesión');
		}
	}
}