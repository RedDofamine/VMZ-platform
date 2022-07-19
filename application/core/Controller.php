<?php

namespace application\core;

use application\core\View;

abstract class Controller
{
	protected $route;
	protected $view;
	protected $acl;
	public function __construct($route)
	{
		$this->route = $route;
		if (!$this->checkAccess()) {
			View::errorCode(403);
		}
		$this->view = new View($route);
		$this->model = $this->loadModel($this->route['controller']);
	}

	public function loadModel($name)
	{
		$path = 'application\models\\' . ucfirst($name);
		if (class_exists($path)) {
			return new $path;
		}
	}

	public function checkAccess()
	{
		$this->acl = require 'application/acl/' . $this->route['controller'] . '.php';
		if ($this->inAcl('all')) {
			return true;
		} elseif (isset($_SESSION['authorize']['id']) and $this->inAcl('authorize')) {
			return true;
		} elseif (!isset($_SESSION['authorize']['id']) and $this->inAcl('guest')) {
			return true;
		} elseif (isset($_SESSION['admin']) and $this->inAcl('admin')) {
			return true;
		}
		return false;
	}

	public function inAcl($key)
	{
		return in_array($this->route['action'], $this->acl[$key]);
	}
}
