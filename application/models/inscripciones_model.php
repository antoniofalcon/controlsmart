<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 	class Inscripciones_model extends CI_Model{
 		function __construct(){
 			parent::__construct();
 			$this->load->database();
 		}		
		public function getAll(){
			$q = $this->db->get('inscritos');
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;
		}
		public function create($data){
			$datos=array(
 				'idCliente'=>$data['idCliente'],
 				'idCurso'=> $data['idCurso']
 				 				
 			);
 			$this->db->insert('inscritos',$datos);

 		}	
		public function update($data){
			$datos= array(
 				'idCliente'=>$data['idCliente'],
 				'idCurso'=> $data['idCurso']
 			);
			$this->db->where('idInscritos',$data['id']);
			$q= $this->db->update('inscritos',$datos);

 		}
 		public function delete($id){
 			$this->db->where('idInscritos',$id]);
			$this->db->delete('inscritos');


 		}
				
 	}
 ?>