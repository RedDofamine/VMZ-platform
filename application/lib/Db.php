<?php

namespace application\lib;

use PDO;

class Db
{
	protected $db;

	public function __construct()
	{
		$config = require 'application/config/db.php';
		$this->db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'] . '', $config['user'], $config['pass']);
	}

	public function query($sql, $params = [])
	{
		// debug($params);
		// exit;
		$stmt = $this->db->prepare($sql);

		if (!empty($params)) {
			foreach ($params as $key => $val) {
				// echo '<p>' . $key . ' => ' . $val . '</p>';
				$stmt->bindValue(':' . $key, $val);
			}
		}
		// exit;
		$stmt->execute();

		return $stmt;
	}


	public function create($sql, $params)
	{
		
	}

	public function getRow($sql, $params = [])
	{
		return $this->query($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getColumn($sql, $params = [])
	{
		return $this->query($sql, $params)->fetchColumn();
	}

	public function update()
	{
	}

	public function delete()
	{
	}
}
