<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Painel extends CI_Controller {
	
 	public function __construct() {
		parent::__construct();

		$logado = $this->session->userdata("logado");

		if ($logado != 1) 
			redirect(base_url('login'));
		
	}

	public function index()
	{
		$this->load->view('painel_view');
	}
}