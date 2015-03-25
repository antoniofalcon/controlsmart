<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Inscripciones extends REST_Controller {

	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('inscripciones_model');
        $this->load->model('clientes_model');
        $this->load->model('cursos_model');
<<<<<<< HEAD
        $this->load->helper('url');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
=======
        $this->load->helper('form');
>>>>>>> origin/master
        
    }
	public function index_get()
	{
		$data['title']= 'Inscripciones';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}

	public function create_get()
	{
		$data=array (
			'clientes'=>$this->clientes_model->getAll(),
			'cursos'=>$this->cursos_model->getAll());
		$data['title']= 'Inscripciones';
		$this->load->view('header',$data);
		$this->load->view('spa/inscripciones/create',$data);
		$this->load->view('footer');
	}
	public function create_post()
	{

		if ($this->form_validation->run('inscripciones') == FALSE)
		{
			$this->create_get();
		}
		else
		{
			$data = $this->getMethodPost();
			$this->inscripciones_model->create($data);
			redirect('/inscripciones');
		}
	}
	public function edit_get()
	{
		$data=array (
			'clientes'=>$this->clientes_model->getAll(),
			'cursos'=>$this->cursos_model->getAll());
		$data['id']= $this->uri->segment(3);
		$data['title']= 'Inscripciones';
		$this->load->view('header',$data);
		$this->load->view('spa/inscripciones/create',$data);
		$this->load->view('footer');
	}
	public function edit_post()
	{
		if ($this->form_validation->run('inscripciones') == FALSE)
		{
			$this->edit_get();
		}
		else
		{
			$data = $this->getMethodPost();
			$data['id'] = $this->uri->segment(3);					
			$this->inscripciones_model->update($data);
			redirect('/inscripciones');
		}
	}
	
	public function delete_get($id)
	{
		$data['id']= $id;
		$data['datos'] = $this->inscripciones_model->getById($data['id']);
		$data['title']= 'Incripciones';
		$this->load->view('header',$data);
		$this->load->view('/spa/incripciones/delete',$data);
		$this->load->view('footer');
	}

	public function delete_post($id)
	{
		$this->inscripciones_model->delete($id);
	}
	private function getMethodPost(){
		$data = array(
			'idCliente'=>$this->input->post('cboCliente'),
			'idCurso'=>$this->input->post('cboCurso')
			);
		return $data;
	}
}	
?>