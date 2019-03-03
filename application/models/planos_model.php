<?php
	class Planos_model extends CI_Model{
		public function buscaTodos(){
			return $this->db->get("planos")->result_array();
		}
		
		public function salvaPlano($plano){
			$this->db->insert("planos",$plano);

		}

		public function retorna($id){
			return $this->db->get_where("planos",array(
					"idPlanos"=> $id
				))->row_array();
		}
		
		public function deletar($id){
		$this->db->where('idPlanos', $id);
		$this->db->delete('planos');
		}
		
		public function salvar(){
		$id = $this->input->post('id');
		$planos = array(
			'idPlanos' => $this->input->post('id'),
			'Nome' => $this->input->post('nome'),
			'Valor' => $this->input->post('valor')
			);
			$this->db->where('idPlanos', $id);
			return $this->db->update('planos' , $planos);
		}
		
	}