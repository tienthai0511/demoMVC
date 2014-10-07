<?php
/**
 * @author thaivt <tienthai0511@gmail.com>
 * @copyright Copyright &copy; 2014 TP
 * @license thaivt
 */

class Controller {
	public function loadModel($name)
	{
		require(APPLICATION . 'models/' . strtolower($name) .'.php');
		$model = new $name;
		return $model;
	}

	public function loadView($name)
	{
		$view = new View($name);
		return $view;
	}

	public function loadPlugin($name)
	{
		require(APPLICATION . 'plugins/' . strtolower($name) . '.php');
	}

	public function loadHelper($name)
	{
		require(APPLICATION . 'helpers/' . strtolower($name) . '.php');
		$helper = new $name;
		return $helper;
	}

	public function redirect($loc)
	{
		global $config;
		
		header('Location: '. $config['base_url'] . $loc);
	}
}
