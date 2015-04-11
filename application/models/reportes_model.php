<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 	class Reportes_model extends CI_Model{
 		function __construct(){
 			parent::__construct();
 			$this->load->database();
 		}		
		
		public function adeudos(){
			$q = $this->db->query('select cliente from clientes where idCliente not in(
							select idCliente from pagos join(
							select fechaInicio,fechaFin,idSemana from semanas
							where curdate() >= fechaInicio and curdate() <=fechaFin) t1
							on pagos.idSemana =t1.idSemana 
							) order by cliente ');
			/*
			$this->db->select('idCliente');
			$this->db->from('pagos');
			$this->db->join('semanas', 'semanas.idSemana = pagos.idPago');
			$this->db->where('curdate() >=','fechaInicio');
			$this->db->where('curdate() <=','fechaFin');
			$this->db->order_by('cliente');
			$q = $this->db->get();
			*/
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;
		}

		public function pagos($id){
			$q = $this->db->query('select cliente,semana from clientes join(
							select idCliente,semana from pagos join(
							select semana,idSemana from semanas
							)t1 on t1.idSemana =pagos.idSemana
							where idCliente = '. $id .'
							)t2 on t2.idCliente = clientes.idCliente
							order by semana');
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;
		}
		public function getSemanas(){
			$this->db->select('semana');
			$q = $this->db->get('semanas');
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;		
		}

		public function getCantidad($id){
			$q = $this->db->query('select count(idSemana) cantidad from pagos where idCliente in(
							select idCliente from clientes where idCliente = '.$id.')');
			$d = array();
			foreach ($q->result() as $r)
			{
				$d[]= $r;
			}
			return $d;
		}
		
 	}
 ?>