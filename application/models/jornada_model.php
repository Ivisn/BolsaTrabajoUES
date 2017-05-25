 <?php  

class Jornada extends CI_Model
{

	function _construct(){
		parent::_construct();
	}

	function guardar($data){
		$this->db->insert('jornada', $data);
	}

}