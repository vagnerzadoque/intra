<?php
namespace Controllers;

use \Core\Controller;
use \Models\User;
use \Models\Crud;
use \Models\Tichamados;

class TiController extends Controller {

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
		$cham = new Tichamados();
		$array = $cham->TodosChamados();
		
		
		
		$this->loadTemplate('template_mt', 'ti_chamados', $array);
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

	public function Cad_user(){
		$array = [];
		$this->loadTemplate('template_mt', 'cadastro_user', $array);


	}

	public function usuario(){
		$array = array();
		$dados = $_POST;
		$tab = $dados['tabela'];
		switch ($dados['metodo']) {
			case 'inserir':
				$crud = new Crud();
				$insert = $crud->inserir($dados, $tab );
				break;
			
			default:
				# code...
				break;
		}



	}

	public function Classificar(){

		if( !empty($_POST['urgencia'])){


			$cl = new Tichamados();
			$tab = 'ti_chamados';
			$id['id'] = $_POST['id'];
			$clas['urgencia'] = $_POST['urgencia'];
			$classificar = $cl->ModelClassificar($tab, $id, $clas);
	
			echo json_encode('ok');


		}else{
			header('Location:'.BASE_URL.'ti');
		}


	}

}