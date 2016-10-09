<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct() {
		parent::__construct();

		// Load form validation library
		// $this->load->library('form_validation');

		// Load session library
		//$this->load->library('session');

		// Load database
		$this->load->model('usuario_model','usuario');
		$this->load->library('encrypt');
	}

Public function index(){
              
               
		$this->load->view('v_login');
}

	public function logar(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('usuario', 'Usuario', 'trim|required');
		$this->form_validation->set_rules('senha', 'Senha', 'trim|required');

 		if ($this->form_validation->run() == FALSE){

			if(isset($this->session->userdata['logado'])){
				//$this->load->view('admin_page');$this->session->userdata['logado']
				$this->load->view('inicio');
			
			}else{
				echo validation_errors();
				$this->load->view('v_login');
			}
		}else{

			$data = array(
				'usuario' => $this->input->post('usuario'),
				'senha' =>md5($this->input->post('senha'))
			);
			
			$logado = $this->usuario->login($data);
print_r($data);
                        $dadosusuario = $this->usuario->get_dadosUser($data);
			if ($logado) {
				$this->session->set_userdata("logado", 1);
                                $this->session->set_userdata("dadosusuario",  $dadosusuario);
				redirect(base_url());
			} else {
				//caso a senha/usuário estejam incorretos, então mando o usuário novamente para a tela de login com uma mensagem de erro.
				$dados['erro'] = "Usuário ou Senha incorretos";
				$this->load->view("v_login", $dados);
			}
		}
	}
	public function logout(){
		$this->session->unset_userdata("logado");
		redirect(base_url());
		
	}
	
}
