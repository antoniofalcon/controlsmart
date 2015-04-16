<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Acceso extends REST_Controller {

	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        //Load resources of CI
        $this->load->model('acceso_model');
        $this->load->helper('security');
        $this->load->helper('form');
        $this->load->helper('url');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    }
    
	public function index_get()
	{
		if($this->session->userdata('logged_in'))
		{
			$data['datos'] = $this->acceso_model->getAll();
			$data['title']= 'Acceso';
			$this->load->view('header',$data);
			$this->load->view('/spa/acceso/index',$data);
			$this->load->view('footer');
		}else
		{
			redirect('./welcome');
		}
	}

	public function create_get()
	{
		if($this->session->userdata('logged_in'))
		{
			$data['title']= 'Usuarios';
			$this->load->view('header',$data);
			$this->load->view('/spa/acceso/create');
			$this->load->view('footer');
		}
		else
		{
			redirect('./welcome');
		}
		
	}
	public function create_post()
	{	
		if ($this->form_validation->run('acceso') == FALSE)
		{
			$this->create_get();
		}
		else
		{
			$data = $this->getMethodPost();
			$this->acceso_model->create($data);
			redirect('/acceso');
		}
	}
	public function edit_get()
	{
		if($this->session->userdata('logged_in'))
		{
			$data['id']= $this->uri->segment(3);
			$data['datos'] = $this->acceso_model->getById($data['id']);
			$data['title']= 'Usuarios';
			$this->load->view('header',$data);
			$this->load->view('/spa/acceso/edit',$data);
			$this->load->view('footer');
		}
		else
		{
			redirect('./welcome');
		}
		
	}
	public function edit_post()
	{
		if ($this->form_validation->run('acceso_edit') == FALSE)
		{
			$this->edit_get();
		}
		else
		{
			$data = $this->getMethodPost();
			$data['id'] = $this->uri->segment(3);					
			$this->acceso_model->update($data);
			redirect('/acceso');
		}
	}
	
	public function delete_get($id)
	{
		if($this->session->userdata('logged_in'))
		{
			$data['id']= $id;
			$data['datos'] = $this->acceso_model->getById($data['id']);
			$data['title']= 'Usuarios';
			$this->load->view('header',$data);
			$this->load->view('/spa/acceso/delete',$data);
			$this->load->view('footer');
		}
		else
		{
			redirect('./welcome');
		}
		
	}

	public function delete_post($id)
	{
		$this->acceso_model->delete($id);
		redirect('/acceso');
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
			redirect('/welcome');
		}else{
		$sess_array = array();

     	foreach($r as $row)
       		$sess_array = array(
         	'id' => $row->idUsuario,
         	'cuenta' => $row->cuenta);

    	$this->session->set_userdata('logged_in', $sess_array);
    	$session_data = $this->session->userdata('logged_in');
		redirect('/welcome/administrar');
		}

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