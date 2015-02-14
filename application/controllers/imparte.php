<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Imparte extends REST_Controller {

	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        
    }
	public function index_get()
	{
		$data['title']= 'Cursos Impartidos';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}

	public function create_get()
	{
		$data['title']= 'Cursos Impartidos';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}
	public function create_post()
	{
		$data['title']= 'Cursos Impartidos';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}
	public function edit_get()
	{
		$data['title']= 'Cursos Impartidos';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}
	public function edit_post()
	{
		$data['title']= 'Cursos Impartidos';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}
	
	public function delete_get()
	{
		$data['title']= 'Cursos Impartidos';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}

	public function delete_post()
	{
		$data['title']= 'Cursos Impartidos';
		$this->load->view('header',$data);
		$this->load->view('footer');
	}
}	
?>