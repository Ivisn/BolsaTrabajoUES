<?php

class Municipio extends CI_Model
{
	public function getMunicipio()
	{
		return $this->db->get('municipio');
	}
}