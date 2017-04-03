<?php 
/*
class Home extends MX_Controller
{

	public function __construct()
	{

		parent::__construct();

	}

	//llamamos a la función data_users la cuál nos
	//entrega un array con los usuarios
	public function index()
	{
		//utilizamos el método say del módulo welcome
		$data['welcomeMsg'] =  Modules::run('welcome/say');
		var_dump($data);
	}

}
*/
/**
* 
*/
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}

	
	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		

			$titulo= array('titulo' => 'Buscando Trabajo' );
		$this->load->view("guest/head",$titulo);
		$this->load->view("guest/nav",$titulo);
		$this->load->view("home",$titulo);
		$this->load->view("guest/footer",$titulo);
	}


}

