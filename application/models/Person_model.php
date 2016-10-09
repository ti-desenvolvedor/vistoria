<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person_model extends CI_Model {
		 var $table = 'usuario';
	var $column_order = array(null,'id', 'nome', 'sobrenome', 'email', 'usuario', 'senha', 'sexo', 'endereco', 'aniversario', 'foto', 'status',null); //set column field database for datatable orderable
	var $column_search = array('nome', 'sobrenome','endereco'); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('id' => 'desc'); // default order 
	
		public function login($data) {

	//$this = $this->load->database('desenvolvimento', TRUE);
		$condition = "usuario = '".$data['usuario']."' AND senha = '" .$data['senha']."'";
		$this->db->select();
		$this->db->from('usuario');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;

		}
	}
		public function get_dadosUser($data) {

	//$this = $this->load->database('desenvolvimento', TRUE);
		$condition = "login = '".$data['login']."' AND senha = '" .$data['senha']."'";
		$this->db->select();
		$this->db->from('operadores');
		$this->db->where($condition);
		$this->db->limit(1);
		$idoper = $this->db->get();
                $resultado = $idoper->result();


		if ($idoper->num_rows() == 1) {
                foreach ($resultado as $key => $value) {
                      $login =  $value->login;
                }
                    $dados = array();
                    
                $condition2 = "login = '".$login."'"  ;
                $this->db->select();
		$this->db->from('operador');
		$this->db->where($condition2);
		$this->db->limit(1);
		$result = $this->db->get()->result();
                
                    foreach ($result as $key => $value) {
                       $dados['idOperador'] = $value->idOperador;;
                       $dados['nome'] = $value->nome;
                        $dados['login'] = $value->login;
                       $dados['sobrenome'] = $value->sobrenome;
                       $dados['departamento'] = $value->departamento;
                       $dados['emailSold'] = $value->emailSold;
                       $dados['ramal'] = $value->ramal;
                   }
                    return $dados;
		} else {
			return false;
		}
	}

	


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		
		$this->db->from($this->table);

		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}


}
