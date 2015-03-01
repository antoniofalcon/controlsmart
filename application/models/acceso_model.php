<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 	class Acceso_model extends CI_Model{
 		function __construct(){
 			parent::__construct();
 			$this->load->database();
 		}		
		public function login($data){
			$this->db->where('cuenta',$data['cuenta']);
			$this->db->where('pswd',$data['pswd']);
			$q= $this->db->get('usuarios');
			return $q->result();
		}
		public function getAll(){
			$q = $this->db->get('usuarios');
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;
		}
		public function create($data){
			$datos= array(
 				'usuario'=>$data['usuario'],
 				'cuenta'=> $data['cuenta'],
 				'pswd'=>$data['pswd'],
 				'cPswd'=>$data['cPswd'],
 				'nivel'=>$data['nivel']
 			);
 			$this->db->insert('usuarios',$datos);
 		}	
		public function update($data){
			if($data['pswd'] == "d41d8cd98f00b204e9800998ecf8427e" and
			$data['cPswd'] == "d41d8cd98f00b204e9800998ecf8427e"){
				$datos= array(
	 				'usuario'=>$data['usuario'],
	 				'cuenta'=> $data['cuenta'],
	 				'nivel'=>$data['nivel']
 				);
			}else{
				$datos= array(
	 				'usuario'=>$data['usuario'],
	 				'cuenta'=> $data['cuenta'],
	 				'pswd'=>$data['pswd'],
	 				'cPswd'=>$data['cPswd'],
	 				'nivel'=>$data['nivel']
	 			);
			}
 			$this->db->where('idUsuario',$data['id']);
			$q= $this->db->update('usuarios',$datos);
 		}
 		
 		public function delete($id){
 			$this->db->where('idUsuario',$id);
			$this->db->delete('usuarios');
 		}
			
		public function getByName($nombre)
		{
			$this->db->like('usuario', $nombre); 
			$q = $this->db->get('usuarios');
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;
		}
		public function getById($id){
			$this->db->where('idUsuario',$id);
			$q= $this->db->get('usuarios');
			return $q;
		}			
 	}
 ?>