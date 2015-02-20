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
 				'maestro'=>$data['nombre'],
 				'direccion'=> $data['direccion'],
 				'telefono'=>$data['telefono']
 			);
			$this->db->where('idMaestro',$data['id']);
			$q= $this->db->update('maestros',$datos);
 		}
 		public function delete($id){
 			$this->db->where('idMaestro',$id);
			$this->db->delete('maestros');
 		}

 		public function getByName($nombre)
		{
			$this->db->like('maestro', $nombre); 
			$q = $this->db->get('maestros');
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;
		}
		public function getById($id){
			 $this->db->where('idMaestro',$id);
			$q= $this->db->get('maestros');
			return $q;
		}		
				
 	}
 ?>