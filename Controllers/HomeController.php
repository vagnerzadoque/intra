<?php
namespace Controllers;

use \Core\Controller;
use \Models\User;

class HomeController extends Controller {

	private $user;

	public function __construct(){
		$array = [];
		$this->user = new User();
		$u = $this->user->isLogged();
		
		if(!$u){
			header('Location:'.BASE_URL.'Login');
			
		}
	}


	


	public function index() {
		$array = array();
		
		
		if($_SESSION['perfil'] ==='admin'){

			$this->loadTemplate('template_mt', 'home_mt', $array);
		}else{
			$this->loadTemplate('template', 'home', $array);
		}
	}

	public function novaSenha(){
		$array = array();
		if(!empty($_POST['senha1']) && !empty($_POST['senha2'])){

			$s = new User();
			$tk = $_SESSION['token'];
			$status_senha = $_SESSION['status_senha'];
			$senha = $s->UpdateSenha($_POST, $tk, $status_senha );
			
			
			
		}
		
		header('Location:'.BASE_URL.'home');
	}

	public function Sair(){

		session_destroy();
        header('Location:'.BASE_URL);
	}

}