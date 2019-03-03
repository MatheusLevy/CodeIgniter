<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plano extends CI_Controller {


	public function index()
	{

		$this->load->model("planos_model");
		$lista = $this->planos_model->buscaTodos();
		$dados = array("planos" => $lista);
		$this->load->view('planos', $dados);
	}

	public function cadastrar(){
		$plano = array(
			"Nome" => $this->input->post("nome"),
			"Valor" => $this->input->post("valor"),
			"idPlanos" => $this->input->post("idPlanos")
			);
			$this->load->model("planos_model");
			$this->planos_model->salvaPlano($plano);
			$this->load->view("Cadastrado");
			
	}

	public function detalhe(){
		$id = $this->input->get("id");
		$this->load->model("planos_model");
		$plano = $this->planos_model->retorna($id);
		$dados = array("plano" => $plano);
		$this->load->helper('url');
		$this->load->view('detalhe', $dados);
	}
	
	public function delete($id){
	$this->load->helper('url');
	$this->load->model("planos_model");
	$this->planos_model->deletar($id);
	redirect('/AdminHome');

	}
	
	public function editar(){
		$this->load->helper('url');
		$id = $this->input->get("id");
		$this->load->model("planos_model");
		$plano = $this->planos_model->retorna($id);
		$dados = array("plano" => $plano);
		$this->load->view('editar', $dados);
		
	}
	
	public function salvar(){
	$this->load->helper('url');
	$id = $this->input->post("id");
	$this->load->model("planos_model");
	$this->planos_model->salvar($id);
	redirect('/AdminHome');
}
}