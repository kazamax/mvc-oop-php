<?php


/**
* 
*/
class Views
{
	
	function __construct()
	{
		
	}

	public function render($controller, $view, $data){

		$controller = substr(get_class($controller), 0, 5);

		require PATH_V.'Default/head.php';

		require PATH_V.$controller.'/'.$view.'.php';

		require PATH_V.'Default/footer.php';
	}
}