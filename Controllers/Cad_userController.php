<?php
namespace Controllers;

use \Core\Controller;
use \Models\User;
use \Models\Crud;

class Cad_userController extends Controller {

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
		
		
			$d = new User();
			$array['dp'] = $d->departamento();
			$array['perfil'] = $d->perfil();
			
			$array['users'] = $d->getUsers();
			
			$this->loadTemplate('template_mt', 'cadastro_user', $array);
	}

	public function pegarPerfil(){
		$d = new User();
		$perfil['perfil'] = $d->perfil();
		
		echo json_encode($perfil);
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



	public function delUser(){
			if(!empty($_POST['id'])){
				
				$array = [];
				$d_id = $_POST['id'];
				$tab = 'user';
				$del = new Crud();
				$d = $del->Deletar($d_id, $tab);
				var_dump($d);
				exit;
				
				
			}
			header('Location:'.BASE_URL.'Cad_user');

	}




	public function usuario(){
		$array = array();
		if(!empty($_POST['nome'] && !empty($_POST['email']))){
			
			
			$dados['nome'] = $_POST['nome'];
			$dados['email'] = $_POST['email'];
			$dados['senha'] = $_POST['senha'];
			$dados['perfil'] = $_POST['perfil'];
			$dados['dep'] = $_POST['dep'];
			$tab = $_POST['tabela'];
					switch ($_POST['metodo']) {
						case 'inserir':
							$crud = new Crud();
							$insert = $crud->inserir($dados, $tab );
							if($insert){
			
								header('Location:'.BASE_URL.'Cad_user');
							}
							break;
						
						default:
							# code...
							break;
					}


			}else{
				header('Location:'.BASE_URL.'Cad_user');
			}



		}


		public function pegarUsuario(){
			$id = $_POST['id'];
			$tab = 'user';
			$u = new User();
			
			$usuario = $u->pegarUser($id, $tab);
			$usuario['dp'] = $u->departamentos();
			
			echo json_encode($usuario);



		}

		public function updateUsuario(){

			if(!empty($_POST['email']) && !empty($_POST['senha'])){
				$tab = 'user';
				$dados[] = $_POST;
				$id = $_POST['id'];
				$up = new User();
				$enviarUpUser = $up->UpUser($id, $tab, $dados);

				echo json_encode('Tudo OK');

			}


		}








}