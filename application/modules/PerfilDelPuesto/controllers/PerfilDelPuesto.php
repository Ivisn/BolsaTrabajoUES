<?php

/**
* 
*/
class PerfilDelPuesto extends CI_Controller
{
	
	public function index()
	{
		$data = array('title' => 'Perfiles');
		$this->load->view("PerfilDelPuesto/perfiles", $data);
	}

	public function create()
	{	
		$data = array('titulo' => 'Crear Perfil');
		$this->load->view("guest/head", $data);

		$data = array('app' => 'Bolsa de Trabajo');
		$this->load->view("guest/nav", $data);

		$data = array('title' => 'Crear Perfil');
		$this->load->view("PerfilDelPuesto/crear", $data);

		$this->load->view("guest/footer");
	}
}
