<?php
require 'config.php';

spl_autoload_register(function($class){

	$folder = 'classes';

	if (strpos($class, 'Model')){

		$folder = 'models';
	}
	elseif (strpos($class, 'Controller')){

		$folder = 'controllers';
	}

	$file = '.'.DIRECTORY_SEPARATOR.$folder.DIRECTORY_SEPARATOR.$class.'.php';

	if (file_exists($file)){

		require $file;
	}

});


$params = array_merge(array('c' => 'start', 'a' =>'select'), $_GET);

$controllerName = $params['c'].'Controller';

$controller = new $controllerName();

$controller->setParams($_GET);

$controller->CallActionName($params['a']);