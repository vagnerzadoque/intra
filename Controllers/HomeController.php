<?php
namespace Controllers;

use \Core\Controller;
use \Models\User;

class HomeController extends Controller {

	public function index() {
		$array = array();

		$use = new User();
		$array = $use->getAll();

		$this->loadTemplate('home', $array);
	}

	public function metodo(){
		$array = ['nome'=>'Vagner Rosario', 'start'=>'1'];
		
		$this->loadTemplate('home', $array);
	}

}