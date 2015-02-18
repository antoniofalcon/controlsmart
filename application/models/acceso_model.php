<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 	class Acceso_model extends CI_Model{
 		function __construct(){
 			parent::__construct();
 			$this->load->database();
 		}		
		public function login($data){
			$this->db->where('Cuenta',$data['cuenta']);
			$this->db->where('Pswd',$data['password']);
			$q= $this->db->get('usuarios');
			return $q;
		}
		public function create($data){

 		}	
		public function update($data){

 		}
 		public function delete($data){

 		}
				
 	}
 ?>