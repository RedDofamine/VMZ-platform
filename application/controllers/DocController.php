<?php

namespace application\controllers;

use application\core\Controller;

class DocController extends Controller
{

	public function actAction()
	{
		$this->view->render('act');
	}

	public function toolsAction()
	{
		// $vars = [
		// 	'category' => 'PARTING',
		// ];
		// debug($this->model->getTools($vars));
		// $tools = [
		// 	['Title' => 'Резец для наружного точение', 'Cipher' => 'У6163-0005-01', 'Appointment' => 'TURNING', 'Description' => 'Твердосплавный резец для черновой наружной обработки деталей'],
		// 	['Title' => 'Твердосплавный отрезной резец', 'Cipher' => 'У6162-2895-15', 'Appointment' => 'PARTING', 'Description' => 'Используется для отрезания детали']
		// ];
		// debug($tools);
		$vars = [
			'tools' => $this->model->getTools(),
			'machines' => $this->model->getMachines()
		];
		$this->view->render('Tools', $vars);
		// $this->view->render('Tools', $this->model->getTools());
	}
}
