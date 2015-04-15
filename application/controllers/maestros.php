<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Maestros extends REST_Controller {

	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('maestros_model');
        $this->load->helper('form');
        $this->load->helper('url');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    }
	public function index_get()
	{
		$data['datos'] = $this->maestros_model->getAll();
		$data['title']= 'Maestros';
		$this->load->view('header',$data);
		$this->load->view('/spa/maestros/index',$data);
		$this->load->view('footer');
	}

	public function create_get()
	{
		$data['title']= 'Maestros';
		$this->load->view('header',$data);
		$this->load->view('/spa/maestros/create');
		$this->load->view('footer');
	}
	public function create_post()
	{
		if ($this->form_validation->run('maestros') == FALSE)
		{
			$this->create_get();
		}else{
			$data = $this->getMethodPost();
			$this->maestros_model->create($data);
			redirect('/maestros');
		}
	}
	public function edit_get()
	{
		$data['id']= $this->uri->segment(3);
		$data['datos'] = $this->maestros_model->getById($data['id']);
		$data['title']= 'Maestros';
		$this->load->view('header',$data);
		$this->load->view('/spa/maestros/edit',$data);
		$this->load->view('footer');
	}
	public function edit_post()
	{
		if ($this->form_validation->run('maestros_edit') == FALSE)
		{
			$this->edit_get();
		}else{
			$data = $this->getMethodPost();
			$data['id'] = $this->uri->segment(3);	
			$this->maestros_model->update($data);
			redirect('/maestros');
		}
	}
	
	public function delete_get($id)
	{
		$data['id']= $id;
		$data['datos'] = $this->maestros_model->getById($data['id']);
		$data['title']= 'Maestros';
		$this->load->view('header',$data);
		$this->load->view('/spa/maestros/delete',$data);
		$this->load->view('footer');
	}

	public function delete_post($id)
	{
		$this->maestros_model->delete($id);
		redirect('/maestros');
	}

	private function getMethodPost(){
		$data = array(
			'nombre'=>$this->input->post('txtNombre'),
			'direccion'=>$this->input->post('txtDireccion'),
			'telefono'=>$this->input->post('txtTelefono')
			);

		return $data;
	}
}	
?>