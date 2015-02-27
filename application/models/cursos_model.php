<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 	class Cursos_model extends CI_Model{
 		function __construct(){
 			parent::__construct();
 			$this->load->database();
 		}		
		public function getAll(){
			$q = $this->db->get('cursos');
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;
		}
		public function create($data){
			$datos=array(
 				'idMaestro'=>$data['idMaestro'],
 				'curso'=> $data['curso'],
 				'horaInicio'=>$data['horaInicio'],
 				'horaSalida'=>$data['horaSalida']
 				
 			);
 			$this->db->insert('Cursos',$datos);
			

 		}	
 		
		public function update($data){
			$datos= array(
 				'idMaestro'=>$data['idMaestro'],
 				'curso'=> $data['curso'],
 				'horaInicio'=>$data['horaInicio'],
 				'horaSalida'=>$data['horaSalida']
 			);
			$this->db->where('idCurso',$data['id']);
			$q= $this->db->update('cursos',$datos);

 		}
 		public function delete($id){
 		$this->db->where('idCurso',$id);
			$this->db->delete('cursos');

 		}
		public function getByName($curso)
		{

            $this->db->like('curso', $curso); 
			$this->db->select('maestro,curso,horaInicio,horaSalida');
			$this->db->from('cursos');
			$this->db->join('maestros', 'maestros.idMaestro = cursos.idMaestro');
			$q = $this->db->get();
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;
		}		
 	
        public function getById($id){
        	$this->db->select('maestro,idCurso,curso,horaInicio,horaSalida');
			$this->db->from('cursos');
			$this->db->join('maestros', 'maestros.idMaestro = cursos.idMaestro');
			$this->db->where('idCurso',$id);
			$q = $this->db->get();

			return $q;
		}
 	public function getAllJoin()
		{

			$this->db->select('maestro,idCurso,curso,horaInicio,horaSalida');
			$this->db->from('cursos');
			$this->db->join('maestros', 'maestros.idMaestro = cursos.idMaestro');
			$q = $this->db->get();
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;
		}


 	}
 ?>