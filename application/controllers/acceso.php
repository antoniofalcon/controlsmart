<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Acceso extends REST_Controller {

	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('acceso_model');
        $this->load->helper('security');
        $this->load->helper('form');
    }
    
	public function index_get()
	{
		$data['datos'] = $this->acceso_model->getAll();
		$data['title']= 'Acceso';
		$this->load->view('header',$data);
		$this->load->view('/spa/acceso/index',$data);
		$this->load->view('footer');
	}

	public function create_get()
	{
		$data['title']= 'Usuarios';
		$this->load->view('header',$data);
		$this->load->view('/spa/acceso/create');
		$this->load->view('footer');
	}
	public function create_post()
	{
		$data['title']= 'Usuarios';
		$data = $this->getMethodPost();
		$this->acceso_model->create($data);
	}
	public function edit_get()
	{
		$data['id']= $this->uri->segment(3);
		$data['datos'] = $this->acceso_model->getById($data['id']);
		$data['title']= 'Usuarios';
		$this->load->view('header',$data);
		$this->load->view('/spa/acceso/edit',$data);
		$this->load->view('footer');
	}
	public function edit_post()
	{
		$data = $this->getMethodPost();		
		$data['id'] = $this->uri->segment(3);
		$this->acceso_model->update($data);
	}
	
	public function delete_get($id)
	{
		$data['id']= $id;
		$data['datos'] = $this->acceso_model->getById($data['id']);
		$data['title']= 'Usuarios';
		$this->load->view('header',$data);
		$this->load->view('/spa/acceso/delete',$data);
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
			'pswd'=>do_hash($this->input->post('txtPassword'), 'md5')
			);
		$r=$this->acceso_model->login($data);
		if (!$r) {
			printf('Datos Inválidos');
		}
		else printf('Bienvenido ' . $r[0]->usuario);
	}

	private function getMethodPost(){
		$data = array(
			'usuario'=>$this->input->post('txtNombre'),
			'cuenta'=>$this->input->post('txtCuenta'),
			'pswd'=>do_hash($this->input->post('txtPswd'), 'md5'),
			'cPswd'=>do_hash($this->input->post('txtCPswd'), 'md5'),
			'nivel'=>$this->input->post('cboNivel'),
			);
		return $data;
	}
}	
?>