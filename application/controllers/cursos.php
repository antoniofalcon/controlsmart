<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Cursos extends REST_Controller {

	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('cursos_model');
        $this->load->helper('form');
        $this->load->helper('url');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    }
	public function index_get()
	{
		$data['datos'] = $this->cursos_model->getAllJoin();
		$data['title']= 'cursos';
		$this->load->view('header',$data);
		$this->load->view('/spa/cursos/index',$data);
		$this->load->view('footer');
	}

	public function create_get()
	{
		$this->load->model('maestros_model');
		$data=array (
			'maestros'=>$this->maestros_model->getAll());
		$data['title']= 'Cursos';
		$this->load->view('header',$data);
		$this->load->view('/spa/cursos/create',$data);
		$this->load->view('footer');
	}
	public function create_post()
	{
		if ($this->form_validation->run('cursos') == FALSE)
		{
			$this->create_get();
		}
		else
		{
			$data = $this->getMethodPost();
			$this->cursos_model->create($data);
			redirect('/cursos');
		}
	}
	public function edit_get()
	{
		$this->load->model('maestros_model');
		$data=array (
			'maestros'=>$this->maestros_model->getAll());
		$data['id']= $this->uri->segment(3);
		$data['datos'] = $this->cursos_model->getById($data['id']);
		$data['title']= 'Cursos';
		$this->load->view('header',$data);
		$this->load->view('/spa/cursos/edit',$data);
		$this->load->view('footer');
	}
	public function edit_post()
	{ 
		if ($this->form_validation->run('cursos') == FALSE)
		{
			$this->edit_get();
		}
		else
		{
			$data = $this->getMethodPost();
			$data['id'] = $this->uri->segment(3);					
			$this->cursos_model->update($data);
			redirect('/cursos');
		}
	}
	
	public function delete_get($id)
	{
		$data['id']= $id;
		$data['datos'] = $this->cursos_model->getById($data['id']);
		$data['title']= 'Cursos';
		$this->load->view('header',$data);
		$this->load->view('/spa/Cursos/delete',$data);
		$this->load->view('footer');
	}

	public function delete_post($id)
	{
		$this->cursos_model->delete($id);
	}

	private function getMethodPost(){
		$data = array(
			'idMaestro'=>$this->input->post('cboMaestros'),
			'curso'=>$this->input->post('txtCurso'),
			'horaInicio'=>$this->input->post('txtHoraInicio'),
			'horaSalida'=>$this->input->post('txtHoraSalida')
			);
		return $data;
	}
}	
?>