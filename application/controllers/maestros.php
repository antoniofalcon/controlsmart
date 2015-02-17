<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Maestros extends REST_Controller {

	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('maestros_model');
        $this->load->helper('form');
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
		$data['title']= 'Maestros';

		$data = array(
			'nombre'=>$this->input->post('txtNombre'),
			'direccion'=>$this->input->post('txtDireccion'),
			'telefono'=>$this->input->post('txtTelefono')
			);

		$this->maestros_model->create($data);
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
		$data = array(
			'nombre'=>$this->input->post('txtNombre'),
			'direccion'=>$this->input->post('txtDireccion'),
			'telefono'=>$this->input->post('txtTelefono'),
			'id'=>$this->uri->segment(3)
			);

		$this->maestros_model->update($data);
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
	}
}	
?>