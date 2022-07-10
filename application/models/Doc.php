<?php



namespace application\models;

use application\core\Model;

class Doc extends Model
{
	// TURNING, GROOVE, PARTING, BORING, THREADING, REAMING
	public function getTools($category = [])
	{
		if (!empty($category)) {
			return $this->db->getRow('SELECT * FROM `tools` WHERE `Appointment` = :category', $category);
		} else {
			return $this->db->getRow('SELECT * FROM tools');
		}
	}
	public function getTool($id)
	{
		return $this->db->getColumn('SELECT * FROM tools WHERE Id = :Id', $id);
	}
	public function getToolByCipher($cipher)
	{
		return $this->db->getColumn('SELECT * FROM tools WHERE Cipher = :Cipher', $cipher);
	}
}
