<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Semanas extends REST_Controller {

	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('semanas_model');
        $this->load->helper('form');
    }
	public function index_get()
	{
		$data['datos'] = $this->semanas_model->getAll();
		$data['title']= 'Semanas';
		$this->load->view('header',$data);
		$this->load->view('/spa/semanas/index',$data);
		$this->load->view('footer');
	}

	public function create_get()
	{
		$data['title']= 'Semanas';
		$this->load->view('header',$data);
		$this->load->view('/spa/semanas/create');
		$this->load->view('footer');
	}
	public function create_post()
	{
		$data['title']= 'Semanas';

		$data = array(
			'semana'=>$this->input->post('txtSemana'),
			'costo'=>$this->input->post('txtCosto')			
			);

		$this->semanas_model->create($data);
	}
	public function edit_get()
	{
		$data['id']= $this->uri->segment(3);
		$data['datos'] = $this->semanas_model->getById($data['id']);
		$data['title']= 'Semanas';
		$this->load->view('header',$data);
		$this->load->view('/spa/semanas/edit',$data);
		$this->load->view('footer');
	}
	public function edit_post()
	{
		$data = array(
			'semana'=>$this->input->post('txtSemana'),
			'costo'=>$this->input->post('txtCosto')			
			'id'=>$this->uri->segment(3)
			);

		$this->semanas_model->update($data);
	}
	
	public function delete_get($id)
	{
		$data['id']= $id;
		$data['datos'] = $this->semanas_model->getById($data['id']);
		$data['title']= 'Semanas';
		$this->load->view('header',$data);
		$this->load->view('/spa/semanas/delete',$data);
		$this->load->view('footer');
	}

	public function delete_post($id)
	{
		$this->semanas_model->delete($id);
	}
}	
?>