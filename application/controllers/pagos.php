<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Pagos extends REST_Controller {

	function __construct()
    {
        // Construct our parent class
        parent::__construct();
		$this->load->model('pagos_model');
		$this->load->model('semanas_model');
		$this->load->model('clientes_model');
        $this->load->helper('url');
        $this->load->helper('date');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');      
    }
	public function index_get()
	{
		$data['datos'] = $this->pagos_model->getAllJoin();
		$data['title']= 'Pagos';
		$this->load->view('header',$data);
		$this->load->view('/spa/pagos/index',$data);
		$this->load->view('footer');
	}

	public function create_get()
	{
		$data['title']= 'Pagos';
		$data=array (
			'clientes'=>$this->clientes_model->getAll(),
			'semanas'=>$this->semanas_model->getAll());
		$this->load->view('header',$data);
		$this->load->view('spa/pagos/create',$data);
		$this->load->view('footer');
	}
	public function create_post()
	{
		if ($this->form_validation->run('pagos') == FALSE)
		{
			$this->create_get();
		}
		else
		{
			$data = $this->getMethodPost();
			$this->pagos_model->create($data);
			redirect('/pagos');
		}
	}
	public function edit_get()
	{
		$data['title']= 'Pagos';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}
	public function edit_post()
	{
		if ($this->form_validation->run('pagos') == FALSE)
		{
			$this->create_get();
		}
		else
		{
			$data = $this->getMethodPost();
			$data['id'] = $this->uri->segment(3);
			$this->pagos_model->create($data);
			redirect('/pagos');
		}
	}
	
	public function delete_get($id)
	{
		$data['title']= 'Pagos';
		$data['id']= $id;
		$data['datos'] = $this->pagos_model->getById($data['id']);
		$this->load->view('header',$data);
		$this->load->view('/spa/pagos/delete',$data);
		$this->load->view('footer');
	}

	public function delete_post($id)
	{
		$this->pagos_model->delete($id);
	}

	private function getMethodPost(){
		$timestamp = now();
		$timezone = 'UM8';
		$time = gmt_to_local($timestamp, $timezone);
		$datestring = "%Y-%m-%d";
		$hourstring = "%H:%i:%s";
		$data = array(
			'idCliente'=>$this->input->post('cboClientes'),
			'idSemana'=>$this->input->post('cboSemanas'),
			'fecha'=>mdate($datestring, $time),
			'hora'=>mdate($hourstring, $time)
			);
		return $data;
	}
}	
?>