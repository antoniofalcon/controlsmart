<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Cursos extends REST_Controller {

	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('cursos_model');
        $this->load->helper('form');
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
		$data['title']= 'cursos';
		$this->load->view('header',$data);
		$this->load->view('/spa/cursos/create',$data);
		$this->load->view('footer');
	}
	public function create_post()
	{
		$data['title']= 'cursos';

		$data = array(
			'idMaestro'=>$this->input->post('cboMaestros'),
			'curso'=>$this->input->post('txtCurso'),
			'horaInicio'=>$this->input->post('txtHoraInicio'),
			'horaSalida'=>$this->input->post('txtHoraSalida')
			);

		$this->cursos_model->create($data);
	}
	public function edit_get()
	{
		$this->load->model('maestros_model');
		$data=array (
			'maestros'=>$this->maestros_model->getAll());
		$data['id']= $this->uri->segment(3);
		$data['datos'] = $this->cursos_model->getById($data['id']);
		$data['title']= 'cursos';
		$this->load->view('header',$data);
		$this->load->view('/spa/cursos/edit',$data);
		$this->load->view('footer');
	}
	public function edit_post()
	{ 
		$data = array(
			'idMaestro'=>$this->input->post('cboMaestros'),
			'curso'=>$this->input->post('txtCurso'),
			'horaInicio'=>$this->input->post('txtHoraInicio'),
			'horaSalida'=>$this->input->post('txtHoraSalida'),
			'id'=>$this->uri->segment(3)
			);

		$this->cursos_model->update($data);
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
}	
?>