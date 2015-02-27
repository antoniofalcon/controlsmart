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
		$data['title']= 'Inscripciones';
		$this->load->view('header',$data);
		$this->load->view('footer');
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
		$data['title']= 'Inscripciones';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}
	
	public function delete_get()
	{
		$data['id']= $id;
		$data['datos'] = $this->inscripciones_model->getById($data['id']);
		$data['title']= 'incripciones';
		$this->load->view('header',$data);
		$this->load->view('/spa/incripciones/delete',$data);
		$this->load->view('footer');
	}

	public function delete_post()
	{
		$data['title']= 'Inscripciones';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}
}	
?>