<?php
	class admin_model extends CI_Model{
		public function logarAdmin($usuario, $senha){
			$this->db->where("Nome", $usuario);
			$this->db->where("Senha", $senha);
			$admin = $this->db->get("administrador") -> row_array();
			return $admin;
		}
	}