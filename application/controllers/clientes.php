<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Clientes extends REST_Controller {

	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('clientes_model');
        $this->load->helper('form');
        $this->load->helper('url');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    }
    
	public function index_get()
	{
		$data['datos'] = $this->clientes_model->getAll();
		$data['title']= 'Clientes';
		$this->load->view('header',$data);
		$this->load->view('/spa/clientes/index',$data);
		$this->load->view('footer');
	}

	public function create_get()
	{
		$data['title']= 'Clientes';
		$this->load->view('header',$data);
		$this->load->view('/spa/clientes/create');
		$this->load->view('footer');
	}
	public function create_post()
	{
		if ($this->form_validation->run('clientes') == FALSE)
		{
			$this->create_get();
		}else{
			$data = $this->getMethodPost();
			$this->clientes_model->create($data);
			redirect('/clientes');
		}
	}
	public function edit_get()
	{
		$data['id']= $this->uri->segment(3);
		$data['datos'] = $this->clientes_model->getById($data['id']);
		$data['title']= 'Clientes';
		$this->load->view('header',$data);
		$this->load->view('/spa/clientes/edit',$data);
		$this->load->view('footer');

	}
	public function edit_post()
	{
		if ($this->form_validation->run('clientes') == FALSE)
		{
			$this->edit_get();
		}else{
		$data = $this->getMethodPost();
		$data['id'] = $this->uri->segment(3);		
		$this->clientes_model->update($data);
		redirect('/clientes');
	}
	
	public function delete_get($id)
	{
		$data['id']= $id;
		$data['datos'] = $this->clientes_model->getById($data['id']);
		$data['title']= 'Clientes';
		$this->load->view('header',$data);
		$this->load->view('/spa/clientes/delete',$data);
		$this->load->view('footer');
	}

	public function delete_post($id)
	{
		
		$this->clientes_model->delete($id);

	}
	private function getMethodPost(){
		$data = array(
				'cliente'=>$this->input->post('txtNombre'),
				'celular'=>$this->input->post('txtTelefono')
				);
		return $data;
	}
}	
?>