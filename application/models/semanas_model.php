<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 	class Semanas_model extends CI_Model{
 		function __construct(){
 			parent::__construct();
 			$this->load->database();
 		}		
		public function getAll(){
			$q = $this->db->get('semanas');
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;

								
		}
		public function create($data){
			$datos= array(
 				'Semana'=>$data['Semana'],
 				'Costo'=> $data['Costo']	
 			);
 			$this->db->insert('semanas',$datos);

 		}	
		public function update($data){
			$datos= array(
 				'Semana'=>$data['Semana'],
 				'Costo'=> $data['Costo']
 			);
			$this->db->where('IdSemana',$data['id']);
			$q= $this->db->update('semanas',$datos);

 		}
 		public function delete($id){
 			$this->db->where('IdSemana',$id);
			$this->db->delete('semanas');

 		}

 		public function getById($id){
			 $this->db->where('IdSemana',$id);
			$q= $this->db->get('semanas');
			return $q;
		}	
				
 	}
 ?>