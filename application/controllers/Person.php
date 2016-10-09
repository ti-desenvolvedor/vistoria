<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('person_model','person');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('person_view');
	}

	public function ajax_list()
	{
		$this->load->helper('url');

		$list = $this->person->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $person) {
			$no++;
			$row = array();
			$row[] = '<input type="checkbox" class="data-check" value="'.$person->id.'">';
			$row[] = $person->nome;
			$row[] = $person->sobrenome;
			$row[] = $person->email;
            $row[] = $person->sexo;
			$row[] = $person->usuario;
            $row[] = $person->senha;
			$row[] = $person->endereco;
			$row[] = $person->aniversario;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->person->count_all(),
						"recordsFiltered" => $this->person->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->person->get_by_id($id);
		$data->aniversario = ($data->aniversario == '0000-00-00') ? '' : $data->aniversario; // if 0000-00-00 set tu empty for datepicker compatibility
		echo json_encode($data);
		}

	public function ajax_add()
	{
		$this->_validate();
		
		$data = array(
				'nome' => $this->input->post('nome'),
				'sobrenome' => $this->input->post('sobrenome'),
				'sexo' => $this->input->post('sexo'),
				'usuario' => $this->input->post('usuario'),
				'endereco' => $this->input->post('endereco'),
				'aniversario' => $this->input->post('aniversario'),
			);

		$insert = $this->person->save($data);

		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->_validate();
		$data = array(
				'nome' => $this->input->post('nome'),
				'sobrenome' => $this->input->post('sobrenome'),
				'sexo' => $this->input->post('sexo'),
				'usuario' => $this->input->post('usuario'),
				'endereco' => $this->input->post('endereco'),
				'aniversario' => $this->input->post('aniversario'),
			);
		$this->person->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->person->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_bulk_delete()
	{
		$list_id = $this->input->post('id');
		foreach ($list_id as $id) {
			$this->person->delete_by_id($id);
		}
		echo json_encode(array("status" => TRUE));
	}

	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('nome') == '')
		{
			$data['inputerror'][] = 'nome';
			$data['error_string'][] = 'Nome is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('sobrenome') == '')
		{
			$data['inputerror'][] = 'sobrenome';
			$data['error_string'][] = 'Sobrenome is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('aniversario') == '')
		{
			$data['inputerror'][] = 'aniversario';
			$data['error_string'][] = 'Date of Birth is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('sexo') == '')
		{
			$data['inputerror'][] = 'sexo';
			$data['error_string'][] = 'Please select gender';
			$data['status'] = FALSE;
		}

		if($this->input->post('endereco') == '')
		{
			$data['inputerror'][] = 'endereco';
			$data['error_string'][] = 'Endereço is required';
			$data['status'] = FALSE;
		}
		if($this->input->post('usuario') == '')
		{
			 $this->load->library('form_validation');
			$this->form_validation->max_length(250)|
			
			$data['inputerror'][] = 'usuario';
			$data['error_string'][] = 'Endereço is required';
			$data['status'] = FALSE;
		}
		 $this->load->library('form_validation');

                $this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|min_length[5]|max_length[46]');
                $this->form_validation->set_rules('nome', 'Nome','required');
                $this->form_validation->set_rules('endereco', 'Endereço', 'required');
                $this->form_validation->set_rules('aniversario', 'Aniversário', '');

                if ($this->form_validation->run() == FALSE)
                {
                    $data['inputerror'][] = 'usuario';
                    $data['error_string'][] = form_error('usuario');
                    $data['status'] = FALSE;
                    echo json_encode($data);
					exit();
                }

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
		

		
	}

}
