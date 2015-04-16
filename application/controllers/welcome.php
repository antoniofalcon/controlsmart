	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			redirect('/welcome/administrar');
		}else
		{
			$this->load->helper('form');
			$this->load->view('login');
		}
		
	}
	public function administrar()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->helper('form');
			$this->load->view('header');
			$this->load->view('welcome');
			$this->load->view('footer');
		}else
		{
			redirect('/welcome');
		}
		
	}

	public function logout(){
      $this->session->unset_userdata('logged_in');
      $this->session->sess_destroy();
      redirect('/welcome');
 }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */