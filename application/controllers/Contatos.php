<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contatos extends CI_Controller {


	public function index()
	{
		$this->load->helper('html');
		$this->load->view('Contatos');
	}

}
