<?php

class Curriculo extends CI_Controller
{

	function _construct(){
		parent::_construct();
		$this->load->model('puesto_model');
	}


	/*public $table ='curriculo';

	public $primary_key = 'curriculo_id';*/
	
	public function index()
	{
		/*$this->load->model('Curriculo');

		$curriculo = new Curriculo;
		$curriculo->table = $this->table;
		$curriculo->primary_key = $this->primary_key;

		$result = $curriculo->read();*/


	}

	public function create()
	{	
		$data = array('titulo' => 'Crear Curriculo');
		$this->load->view("guest/head", $data);

		$this->load->view("guest/nav");

		$data = array('titulo' => 'Nuevo Curriculo');
		$this->load->view("guest/header", $data);

		$this->load->view("Curriculo/crear");

		$this->load->view("guest/footer");
	}

	public function guardar(){
		$data = array(
			);
	}
}
