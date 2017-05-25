<?php

class Departamento extends CI_Model
{
	public function getDepartamento()
	{
		return $this->db->get('departamento');
	}
}