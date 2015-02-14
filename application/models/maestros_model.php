<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 	class Maestros_model extends CI_Model{
 		function __construct(){
 			parent::__construct();
 			$this->load->database();
 		}		
		public function getAll(){
			$q = $this->db->get('maestros');
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;
		}
		public function create($data){
			$datos= array(
 				'Maestro'=>$data['nombre'],
 				'Direccion'=> $data['direccion'],
 				'Telefono'=>$data['telefono']
 			);
 			$this->db->insert('maestros',$datos);
 		}	
		public function update($data){
			$datos= array(
 				'Maestro'=>$data['nombre'],
 				'Direccion'=> $data['direccion'],
 				'Telefono'=>$data['telefono']
 			);
			$this->db->where('IdMaestro',$data['id']);
			$q= $this->db->update('maestros',$datos);
 		}
 		public function delete($id){
 			$this->db->where('IdMaestro',$id);
			$this->db->delete('Maestros');
 		}

 		public function getByName($nombre)
		{
			$this->db->like('Maestro', $nombre); 
			$q = $this->db->get('maestros');
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;
		}
		public function getById($id){
			 $this->db->where('IdMaestro',$id);
			$q= $this->db->get('maestros');
			return $q;
		}		
				
 	}
 ?>