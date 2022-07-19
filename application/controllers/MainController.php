<?php

// use application\core\Controller;
namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{
	public function indexAction()
	{
		$this->view->render('VMZ');
	}
}
