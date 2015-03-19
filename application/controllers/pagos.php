<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Pagos extends REST_Controller {

	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('date');
        $this->load->model('pagos_model');
        
    }
	public function index_get()
	{
		$data['title']= 'Pagos';
		//$this->load->view('header',$data);
		$this->load->view('pagos/create');
		$this->load->view('footer');
	}

	public function create_get()
	{
		$data['title']= 'Pagos';
		//$this->load->view('header',$data);
		$this->load->view('/spa/pagos/create');
		$this->load->view('footer');
	}
	public function create_post()
	{
		$data['title']= 'Pagos';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}
	public function edit_get()
	{
		$data['title']= 'Pagos';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}
	public function edit_post()
	{
		$data['title']= 'Pagos';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}
	
	public function delete_get()
	{
		$data['title']= 'Pagos';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}

	public function delete_post()
	{
		$data['title']= 'Pagos';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}
}	
?>