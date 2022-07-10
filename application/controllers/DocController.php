<?php

namespace application\controllers;

use application\core\Controller;

class DocController extends Controller
{

	public function toolsAction()
	{
		$vars = [
			'category' => 'PARTING',
		];
		debug($this->model->getTools($vars));
	}
}
