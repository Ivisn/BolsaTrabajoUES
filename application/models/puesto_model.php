 <?php  

class Puesto extends CI_Model
{

	public function getPuesto(){
		return $this->db->get('puesto');
	}

	function _construct(){
		parent::_construct();
	}

	function guardar($data){
		$this->db->insert('puesto', $data);
	}

}
