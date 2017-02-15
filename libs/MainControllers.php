<?php

/**
* 
*/
class MainControllers
{
	
	function __construct()
	{
		Session::start();
		$this->view = new Views();
		$this->loadClassModels();
	}

	public function loadClassModels(){
		$model = substr(get_class($this), 0, 5).'_model';
		$pathModels = PATH_M.$model.'.php';
		if (file_exists($pathModels)) {
			require $pathModels;
			$this->model = new $model();
		}
	}
}