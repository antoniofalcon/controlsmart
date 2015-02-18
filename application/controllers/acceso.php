<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Acceso extends REST_Controller {

	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('acceso_model');
    }
    
	public function index_get()
	{
		$data['title']= 'Acceso';
		$this->load->view('header',$data);
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
		$data['title']= 'Clientes';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}
	public function edit_post()
	{
		
	}
	
	public function delete_get()
	{
		
	}

	public function delete_post($id)
	{

	}
	public function login_post()
	{
		$data['title']= 'Login';
		$data = array(
			'cuenta'=>$this->input->post('txtCuenta'),
			'password'=>$this->input->post('txtPassword')
			);

		$this->acceso_model->login($data);
	}
}	
?>