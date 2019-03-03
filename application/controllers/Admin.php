<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function autenticar()
	{
		$this->load->model("admin_model");
		$usuario = $this->input->post("usuario"); 
		$senha = $this->input->post("senha");
		$admin = $this->admin_model->logarAdmin($usuario, $senha);
		if($admin){
			$this->session->set_userdata("usuario logado", $usuario);
			header('Location: ../AdminHome'); 
		}else{
			$this->session->set_flashdata("danger","Usuário ou senha errados");
		}
	}

	public function index(){
			$this->load->view('admin');
	}

}
