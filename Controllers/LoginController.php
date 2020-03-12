<?php
namespace Controllers;

use \Core\Controller;
use \Models\User;

class LoginController extends Controller {

	public function index() {
		$array = array();

		$use = new User();
		$array = $use->getAll();

		
			$this->loadTemplate('login-template','login', $array);
		
		
	}

	public function Action_login(){

		if(!empty($_POST['email']) && !empty($_POST['senha'])){

			$email = addslashes($_POST['email']);
			$senha = $_POST['senha'];
			
			$validar = new User();
			$validado = $validar->validateLogin($email, $senha);
			
			if($validado===true){
				
				header("Location:".BASE_URL);
				
			}else{
				header("Location:".BASE_URL.'Login');
			}

		}


	}

	

	

}