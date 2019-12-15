<?php
namespace Controllers;

use \Core\Controller;
use \Models\User;

class LoginController extends Controller {

	public function index() {
		$array = array();

		$use = new User();
		$array = $use->getAll();

		$this->loadTemplate('login', $array);
	}

	

}