<?php

/**
* 
*/
class PerfilDelPuesto extends CI_Controller
{
	
	function _construct(){
		parent::_construct();
		//$this->load->model('puesto_model');
	}

	public function index()
	{
		$data = array('titulo' => 'Perfiles');
		$this->load->view("guest/head", $data);

		$this->load->view("guest/nav");

		$data = array('titulo' => 'Lista de Perfiles');
		$this->load->view("guest/header", $data);

		$this->load->view("PerfilDelPuesto/perfiles");

		$this->load->view("guest/footer");
	}

	public function create()
	{	
		$data = array('titulo' => 'Crear Perfil');
		$this->load->view("guest/head", $data);

		$this->load->view("guest/nav");

		$data = array('titulo' => 'Nuevo Perfil de Puesto');
		$this->load->view("guest/header", $data);

		$result = $this->departamento->getDepartamento();
		$result2 = $this->municipio->getMunicipio();
		$data = array('consulta' => $result, 'consulta2' => $result2);
		$this->load->view("PerfilDelPuesto/crear", $data);

		$this->load->view("guest/footer");
	}

	public function guardar(){

		$nombre = $this->input->post("nombre");

		echo $nombre;

		/*$data = array(
			'id_puesto' => $this->input->post('id_puesto', TRUE),
			'nombre' => $this->input->post('nombre', TRUE),
			'descripcion' => $this->input->post('descripcion', TRUE),
			'vacante' => $this->input->post('vacante', TRUE);
			);
		$this->puesto_model->guardar($data);
	*/
	}
}
