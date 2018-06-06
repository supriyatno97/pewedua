<?php 

namespace model;

use app\Model;


/**
* 
*/
class User extends Model
{
	public function ambilUser()
	{
		$query = $this->db->prepare("SELECT * FROM username = ". $username);
		$query->execute();
		$data = $query->fetch();

		return $data;
	}
}