<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Clientes extends REST_Controller {

	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('clientes_model');
        $this->load->helper('form');
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
		$data['title']= 'Clientes';

		$data = array(
			'cliente'=>$this->input->post('txtNombre'),
			'celular'=>$this->input->post('txtTelefono')
			);

		$this->clientes_model->create($data);
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

		$data = array(
			'cliente'=>$this->input->post('txtNombre'),
			'celular'=>$this->input->post('txtTelefono'),
			'id'=>$this->uri->segment(3)
			);

		$this->clientes_model->update($data);
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
}	
?>