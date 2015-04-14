<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Reportes extends REST_Controller {

	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        //Load resources of CI
        $this->load->model('reportes_model');
        $this->load->model('clientes_model');
        $this->load->helper('security');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('date');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		
    }
    
	public function index_get()
	{
		$data['title']= 'Reportes';
		$this->load->view('header',$data);
		$this->load->view('/spa/reportes/index');
		$this->load->view('footer');
	}

	public function pagos_get()
	{
		$data['title']= 'Reporte de Pagos';
		$this->load->view('header',$data);
		$this->load->view('/spa/reportes/pagos');
		$this->load->view('footer');
	}
	public function pagos_post()
	{
		$timestamp = now();
		$timezone = 'UM8';
		$time = gmt_to_local($timestamp, $timezone);
		$datestring = "%d/%m/%Y";
		

		$data['title']= 'Reporte de Pagos';
		$name = $this->input->post('txtBuscar');
		$data = $this->clientes_model->getByName($name);

		$data['semanas'] = $this->reportes_model->pagos($data[0]->idCliente);
		$data['cant_semanas'] = $this->reportes_model->getSemanas();
		$data['cantidad'] = $this->reportes_model->getCantidad($data[0]->idCliente);
		$data['fecha'] = mdate($datestring, $time);
		$data['datos'] = $this->clientes_model->getByName($name);
		$this->load->view('header',$data);
		$this->load->view('/spa/reportes/reporte_pagos',$data);
		$this->load->view('footer');

		
	}
	public function adeudos_get()
	{
		$timestamp = now();
		$timezone = 'UM8';
		$time = gmt_to_local($timestamp, $timezone);
		$datestring = "%d/%m/%Y";
		$data['fecha'] = mdate($datestring, $time);
		$data['title']= 'Reporte de Adeudos';
		$data['datos'] = $this->reportes_model->adeudos();
		$this->load->view('header',$data);
		$this->load->view('/spa/reportes/adeudos',$data);
		$this->load->view('footer');
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
		$data['id']= $this->uri->segment(3);
		$data['datos'] = $this->acceso_model->getById($data['id']);
		$data['title']= 'Usuarios';
		$this->load->view('header',$data);
		$this->load->view('/spa/acceso/edit',$data);
		$this->load->view('footer');
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
			'cliente'=>$this->input->post('txtBuscar')
			);
		return $data;
	}
}	
?>