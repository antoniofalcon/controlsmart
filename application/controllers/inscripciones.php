<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Inscripciones extends REST_Controller {

	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('inscripciones_model');
        $this->load->helper('form');
    }
	public function index_get()
	{
		$data['title']= 'Inscripciones';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}

	public function create_get()
	{
		$data['title']= 'Inscripciones';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}
	public function create_post()
	{
		$data['title']= 'Inscripciones';
		$data = array(
			'idCliente'=>$this->input->post('cboidCliente'),
			'idCurso'=>$this->input->post('cboidCurso')
			);

		$this->inscripciones_model->create($data);
	}
	public function edit_get()
	{
		$data['title']= 'Inscripciones';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}
	public function edit_post()
	{
		$data['title']= 'Inscripciones';
		$data = array(
			'idCliente'=>$this->input->post('cboidCliente'),
			'idCurso'=>$this->input->post('cboidCurso')
			
			'id'=>$this->uri->segment(3)
			);

		$this->inscripciones_model->update($data);
	}
	
	public function delete_get()
	{
		$data['title']= 'Inscripciones';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}

	public function delete_post()
	{
		$this->inscripciones_model->delete($id);
	}
}	
?>