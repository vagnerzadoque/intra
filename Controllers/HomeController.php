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
		
		
		
		$this->loadTemplate('template', 'home', $array);
	}

	public function metodo(){
		$array =[];
		
		$this->loadTemplate('template','home', $array);
	}

	public function Sair(){

		session_destroy();
        header('Location:'.BASE_URL);
	}

}