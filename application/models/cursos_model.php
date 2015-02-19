<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 	class Cursos_model extends CI_Model{
 		function __construct(){
 			parent::__construct();
 			$this->load->database();
 		}		
		public function getAll(){
			$q = $this->db->get('Cursos');
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;
		}
		public function create($data){
			$datos=array(
 				'IdMaestro'=>$data['IdMaestro'],
 				'Curso'=> $data['Curso'],
 				'HoraInicio'=>$data['HoraInicio'],
 				'HoraSalida'=>$data['HoraSalida']
 				
 			);
 			$this->db->insert('Cursos',$datos);
			

 		}	
 		
		public function update($data){
			$datos= array(
 				'IdMaestro'=>$data['IdMaestro'],
 				'Curso'=> $data['Curso'],
 				'HoraInicio'=>$data['HoraInicio'],
 				'HoraSalida'=>$data['HoraSalida']
 			);
			$this->db->where('IdCurso',$data['id']);
			$q= $this->db->update('Cursos',$datos);

 		}
 		public function delete($data){}
 		$this->db->where('IdCurso',$data['id']);
			$this->db->delete('Cursos');

 		}
		public function getByName($nombre)
		{

            $this->db->like('Curso', $Curso); 
			$this->db->select('Maestro,Curso,HoraInicio,HoraSalida');
			$this->db->from('cursos');
			$this->db->join('maestros', 'maestros.IdMaestro = cursos.IdMaestro');
			$q = $this->db->get();
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;
		}		
 	
        public function getById($id){
			 $this->db->where('idCurso',$id);
			$q= $this->db->get('Cursos');
			return $q;
		}
 	public function getAllJoin()
		{

			$this->db->select('Maestro,Curso,HoraInicio,HoraSalida');
			$this->db->from('cursos');
			$this->db->join('maestros', 'maestros.IdMaestro = cursos.IdMaestro');
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