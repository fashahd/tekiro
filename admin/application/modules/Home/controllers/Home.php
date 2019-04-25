<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("userlogin")){
			redirect('/auth/login', 'refresh');
		}
		$this->load->model("ModelHome");
	}

	public function front()
	{
		$session = $this->session->userdata("userlogin");
		$data["content"] = $this->ModelHome->getContent();
		$data["name"]	= $session["name"];
		$data["module"] = "Home";
		$this->layout->content('front',$data);
	}

	function updateAbout(){
		$this->db->where("id","1");
		$query = $this->db->update("tekiro_general",array("about"=>$_POST["content"]));
		if($query){
			$return = array(
				"status" => 200,
				"message" => "Content Updated"
			);
		}else{
			$return = array(
				"status" => 401,
				"message" => "Failed to update content"
			);
		}
		echo json_encode($return);
	}
}
