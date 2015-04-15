<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 	class Pagos_model extends CI_Model{
 		function __construct(){
 			parent::__construct();
 			$this->load->database();
 		}		
		public function getAll(){
			$q = $this->db->get('pagos');
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;
		}
		public function getAllJoin()
		{

			$this->db->select('cliente,semana,idPago,fecha,hora');
			$this->db->from('pagos');
			$this->db->join('semanas', 'semanas.idSemana = pagos.idSemana');
			$this->db->join('clientes', 'clientes.idCliente = pagos.idCliente');
			$q = $this->db->get();
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;
		}
		public function getByName($cliente)
		{            
			$this->db->select('cliente,semana,idPago,fecha,hora');
			$this->db->from('pagos');
			$this->db->join('semanas', 'semanas.idSemana = pagos.idSemana');
			$this->db->join('clientes', 'clientes.idCliente = pagos.idCliente');
			$this->db->like('cliente', $cliente); 
			$q = $this->db->get();
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;
		}		

		public function getById($id){
        	$this->db->select('cliente,semana,idPago,fecha,hora');
			$this->db->from('pagos');
			$this->db->join('semanas', 'semanas.idSemana = pagos.idSemana');
			$this->db->join('clientes', 'clientes.idCliente = pagos.idCliente');
			$this->db->where('idPago', $id); 
			$q = $this->db->get();
			return $q;
		}
		public function create($data){
			$datos=array(
 				'idCliente'=>$data['idCliente'],
 				'idSemana'=>$data['idSemana'],
 				'fecha'=> $data['fecha'],
				'hora'=>$data['hora'] 				
 			);
 			$this->db->insert('pagos',$datos);
 		}	
		public function update($data){
			$datos=array(
 				'idCliente'=>$data['idCliente'],
 				'idSemana'=>$data['idSemana'],
 				'fecha'=> $data['fecha'],
				'hora'=>$data['hora'] 				
 			);
			$this->db->where('idPago',$data['id']);
 			$this->db->update('pagos',$datos);
 		}
 		public function delete($id){
 			$this->db->where('idPago',$id);
			$this->db->delete('pagos');
 		}
				
 	}
 ?>