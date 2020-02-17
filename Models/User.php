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
			$array = $sql->fetch(PDO::FETCH_ASSOC);
		}

		return $array;
	}

	public function isLogged(){
		
		if(!empty($_SESSION['token'])){
			$token = $_SESSION['token'];

			$sql = "SELECT id FROM user WHERE token = :token";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':token', $token);
			$sql->execute();

			if($sql->rowCount()>0){
				return true;

			}
				
			



		}

		return false;


	}

	public function validateLogin($email, $senha){

		$sql = "SELECT * FROM user WHERE email = :email AND senha = :senha";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':email',$email);
		$sql->bindValue(':senha',$senha);
		$sql->execute();
		
		if($sql->rowCount()>0){
			$dados = $sql->fetch(PDO::FETCH_ASSOC);
			
				$token = md5(time().rand(0,999).$dados['id']);
				
				$sql = "UPDATE user SET token = :token WHERE :id = id";
				$sql = $this->db->prepare($sql);
				$sql->bindValue(':token',$token);
				$sql->bindValue(':id',$dados['id']);
				$sql->execute();
				
				$_SESSION['token'] = $token;

				return true;


		}else{

			return false;
		}



	}



}