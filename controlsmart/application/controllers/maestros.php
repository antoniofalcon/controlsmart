<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Maestros extends REST_Controller {

	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('maestros_model');
    }
	public function index_get()
	{
		$data['title']= 'Maestros';
		$this->load->view('header',$data);
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
			'sueldo'=>$this->input->post('txtSueldo'),
			'telefono'=>$this->input->post('txtTelefono')
			);

		$this->maestros_model->create($data);
	}
	public function edit_get()
	{
		$data['title']= 'Maestros';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}
	public function edit_post()
	{
		$data = array(
			'nombre'=>$this->input->post('txtNombre'),
			'direccion'=>$this->input->post('txtDireccion'),
			'sueldo'=>$this->input->post('txtSueldo'),
			'telefono'=>$this->input->post('txtTelefono'),
			'id'=>$this->uri->segment(3)
			);

		$this->maestros_model->update($data);
	}
	
	public function delete_get()
	{
		$data['title']= 'Maestros';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}

	public function delete_post($id)
	{
		$this->maestros_model->delete($id);
	}
}	
?>