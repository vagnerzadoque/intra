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
	public function getUsers() {
		$array = array();

        $sql = "SELECT * FROM user ORDER BY data DESC ";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
			$array = $sql->fetchAll(PDO::FETCH_ASSOC);
		}
		
		return $array;
	}

	public function departamento(){
		$sql = "SELECT * FROM departamentos";
		$sql = $this->db->query($sql);
		$dados = $sql->fetchAll(PDO::FETCH_ASSOC);
		return $dados;
	}
	public function perfil(){
		$sql = "SELECT * FROM perfil";
		$sql = $this->db->query($sql);
		$dados = $sql->fetchAll(PDO::FETCH_ASSOC);
		return $dados;
	}

	public function isLogged(){
		
		if(!empty($_SESSION['token'])){
				$token = $_SESSION['token'];

				$sql = "SELECT id FROM user WHERE token = :token";
				$sql = $this->db->prepare($sql);
				$sql->bindValue(':token', $token);
				$sql->execute();

				if($sql->rowCount()>0)
				{
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
				$_SESSION = $dados;
				$_SESSION['token'] = $token;

				return true;


		}else{

			return false;
		}
	}


	public function UpdateSenha($senhaOK, $token){

		$sOK = $senhaOK['senha1'];
		$st_senha = '1'; 
		$_SESSION['status_senha'] = '1';
		$tok = $token;

		$sql ="UPDATE user SET senha = :senha, status_senha = :status_senha WHERE :token = token";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':token',$tok);
		$sql->bindValue(':senha',$sOK);
		$sql->bindValue(':status_senha', $st_senha);
		$sql->execute();

	}

	public function pegarUser($id, $tab){
		$sql = "SELECT * FROM `$tab` WHERE `id` = $id";
		$sql = $this->db->query($sql);
		$usuario = $sql->fetch(PDO::FETCH_ASSOC);
		return $usuario;
	}

	public function UpUser($id, $tab, $dados){
		/* var_dump($dados);
		exit; */
		$nome = $dados[0]['nome'];
		$email = $dados[0]['email'];
		$senha = $dados[0]['senha'];
		$perfil = $dados[0]['perfil'];
		$dep = $dados[0]['dep'];
		$id = $dados[0]['id'];
		$sql ="UPDATE `$tab` SET nome = :nome, email = :email, senha = :senha, perfil = :perfil, dep = :dep WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':nome',$nome);
		$sql->bindValue(':email',$email);
		$sql->bindValue(':senha', $senha);
		$sql->bindValue(':perfil', $perfil);
		$sql->bindValue(':dep', $dep);
		$sql->bindValue(':id', $id);
		$sql->execute();

	}

	public function departamentos(){
		$sql = "SELECT * FROM departamentos";
		$sql = $this->db->query($sql);
		$dp = $sql->fetchAll(PDO::FETCH_ASSOC);
		return $dp;
	}

}