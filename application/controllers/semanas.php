<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Semanas extends REST_Controller {

	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('semanas_model');
        $this->load->helper('form');
        $this->load->helper('url');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
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
		if ($this->form_validation->run('semanas') == FALSE)
		{
			$this->create_get();
		}else{
			$data = $this->getMethodPost();
			$this->semanas_model->create($data);
			redirect('/semanas');
		}
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
		if ($this->form_validation->run('semanas_edit') == FALSE)
		{
			$this->edit_get();
		}else{
			$data = $this->getMethodPost();
			$data['id'] = $this->uri->segment(3);	
			$this->semanas_model->update($data);
			redirect('/semanas');
		}
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
		redirect('/semanas');
	}

	private function getMethodPost(){
		$data = array(
			'semana'=>$this->input->post('txtSemana'),
			'costo'=>$this->input->post('txtCosto')			
			);

		return $data;
	}
}	
?>