<?php

include('config.php');

$url = isset($_GET['url']) ? $_GET['url'] : 'Index/index';

$url = explode('/', $url);

$controller = '';
$method = '';
$params = '';
<<<<<<< HEAD
=======
$
>>>>>>> parent of 17c83ec... Revert "Agrego modulos ."

if ($url[0] != '') {
	$controller = ucfirst($url[0]).'Controller';
}
if (isset($url[1])) {
	if ($url[0] != '') {
		$method = lcfirst($url[1]);
	}
}
if (isset($url[2])) {
	if ($url[2] != '') {
		$params = lcfirst($url[2]);
	}
}

spl_autoload_register(function($class){
	if (file_exists(LIBS.$class.'.php')) {
		require LIBS.$class.'.php';
	}
});

$pathControllers = PATH_C.$controller.'.php';

if (file_exists($pathControllers)) {
	require $pathControllers;
	echo 'controller encontrado : '.$controller;
	$controller = new $controller();
	if (method_exists($controller, $method)) {
		if (isset($params) and $params != '') {
			echo '<br>metodo cargado con params';
			$controller->{$method}($params);
		}else{
			echo '<br>metodo cargado sin params';
			$controller->{$method}();
		}
	}
}else{
	echo 'controller NO encontrado : '.$controller;
}

