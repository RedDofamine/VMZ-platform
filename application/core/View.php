<?php



namespace application\core;

class View
{


	protected $route;
	protected $path;
	protected $layout = 'default';

	public function __construct($route)
	{
		$this->route = $route;
		$this->path = $route['controller'] . '/' . $route['action'];
	}

	public function render($title, $vars = [])
	{
		$view = 'application/views/' . $this->path . '.php';
		$layout = 'application/views/layouts/' . $this->layout . '.php';
		extract($vars);

		if (file_exists($view)) {
			ob_start();
			require $view;
			$content = ob_get_clean();
			require $layout;
		}
	}

	public function redirect($url)
	{
		header('location: ' . $url);
		exit;
	}


	public static function errorCode($code)
	{
		http_response_code($code);
		$path = 'application/views/errors/' . $code . '.php';
		if (file_exists($path)) {
			require $path;
		}
		exit;
	}
}
