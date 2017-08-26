<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AboutMe extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('mdl_contact');
	}

	public function index()
	{
		$d["contact"] = $this->mdl_contact->getAllContacts();

		$this->load->view('aboutme',$d);
	}

	public function help(){

	}

	public function saveContact(){

		$data = array(
			"contact_name" => $_GET['name'],
			"contact_no" => $_GET['contact']
		);
		
		if($this->mdl_contact->addNewContact($data)){
			
		}
	}
	
}
	
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */