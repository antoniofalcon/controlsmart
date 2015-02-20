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
		$data['title']= 'Usuarios';
		$this->load->view('header',$data);
		$this->load->view('/spa/clientes/create');
		$this->load->view('footer');
	}
	public function create_post()
	{
		$data['title']= 'Usuarios';
		$data = getMethodPost();
		$this->acceso_model->create($data);
	}
	public function edit_get()
	{
		$data['title']= 'Usuarios';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}
	public function edit_post()
	{
		$data = getMethodPost();		
		$data['id'] = $this->uri->segment(3);
		$this->acceso_model->update($data);
	}
	
	public function delete_get($id)
	{
		$data['title']= 'Usuarios';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}

	public function delete_post($id)
	{
		$this->acceso_model->delete($id);
	}
	public function login_post()
	{
		$data['title']= 'Login';
		$data = array(
			'cuenta'=>$this->input->post('txtCuenta'),
			'pswd'=>$this->input->post('txtPassword')
			);

		$this->acceso_model->login($data);
	}

	private function getMethodPost(){
		$data = array(
			'usuario'=>$this->input->post('txtNombre'),
			'cuenta'=>$this->input->post('txtCuenta'),
			'pswd'=>$this->input->post('txtPswd'),
			'cPswd'=>$this->input->post('txtCPswd')
			);
		return $data;
	}
}	
?>