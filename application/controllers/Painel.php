<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Painel extends MY_Controller {
    
        public $titulo;
        public $controle;
	
 	public function __construct() {
            parent::__construct();
                $this->titulo = 'Extranet - Painel';
                $this->controle = 'Painel';     
	}

	public function index()
	{
            $dados['titulo']=$this->titulo;
            $dados['controle']=$this->controle;    	
            $this->load->view('painel_view',$dados);
	}
}