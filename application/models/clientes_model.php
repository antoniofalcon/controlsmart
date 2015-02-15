<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 	class Clientes_model extends CI_Model{
 		function __construct(){
 			parent::__construct();
 			$this->load->database();
 		}		
		public function getAll(){

			$q = $this->db->get('clientes');
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;
		}
		public function create($data){

			$datos= array(
 				'cliente'=>$data['cliente'],
 				'celular'=> $data['celular']	
 			);
 			$this->db->insert('clientes',$datos);
 		}	
		public function update($data){

			$datos= array(
 				'cliente'=>$data['nombre'],
 				'celular'=> $data['celular']
 			);
			$this->db->where('idCliente',$data['id']);
			$q= $this->db->update('clientes',$datos);
 		}
 		public function delete($data){

 			$this->db->where('idCliente',$id);
			$this->db->delete('clientes');

 		}

 		public function getByName($nombre)
		{
			$this->db->like('cliente', $nombre); 
			$q = $this->db->get('clientes');
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;
		}
		public function getById($id){
			 $this->db->where('idCliente',$id);
			$q= $this->db->get('clientes');
			return $q;
		}
				
 	}
 ?>