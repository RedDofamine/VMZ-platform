<?php


namespace application\controllers;

use application\core\Controller;
use application\core\View;


class AccountController extends Controller
{

	public function indexAction()
	{
		$this->view->render('profile');
	}

	public function loginAction()
	{
		// $this->view->redirect('https://google.com');
		$params = [
			'name' => 'Ivan'
		];
		$this->model->getLogin();
		// $data = $db->getColumn("SELECT name FROM users WHERE name = :name", $params);
		// debug($data);
		$this->view->render('login page');
	}
	public function registerAction()
	{
		$this->view->render('register');
	}
}
