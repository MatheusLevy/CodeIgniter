<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminHome extends CI_Controller {


	public function index(){
		$this->load->helper('url');
		$this->load->model("planos_model");
		$lista = $this->planos_model->buscaTodos();
		$dados = array("planos" => $lista);
		$this->load->view('adminhome', $dados);
	}

}
