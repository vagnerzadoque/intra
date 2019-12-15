<?php
namespace Models;


use \PDO;
use \Core\Model;


class User extends Model {

	public function getAll() {
		$array = array();

        $sql = "SELECT * FROM user";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

}