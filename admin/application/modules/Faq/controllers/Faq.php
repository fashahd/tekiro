<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("userlogin")){
			redirect('/auth/login', 'refresh');
		}
		$this->load->model("ModelFaq");
	}

	public function index()
	{
		$data["faq"]	= $this->ModelFaq->getFAQ();
		$session = $this->session->userdata("userlogin");
		$data["name"]	= $session["name"];
		$data["module"] = "FAQ";
		$this->layout->content('index',$data);
	}

	public function editfaq($id = null)
	{
		$data["faq"]	= $this->ModelFaq->getFAQByID($id);
		$session = $this->session->userdata("userlogin");
		$data["name"]	= $session["name"];
		$data["module"] = "FAQ";
		$this->layout->content('editfaq',$data);
	}

	function updateFAQ(){
		$data = array(
			"title" 	=> $_POST["title"],
			"title_id" 	=> $_POST["title_id"],
			"content" 	=> $_POST["content"],
			"content_id" 	=> $_POST["content_id"],
		);
		$this->db->where("id",$_POST["id"]);
		$query = $this->db->update("tekiro_faq",$data);
		if($query){
			$data = array(
				"status" 	=> 200,
				"message"	=> "FAQ Updated"
			);
		}else{			
			$data = array(
				"status" 	=> 400,
				"message"	=> "FAQ Failed to Update"
			);
		}

		echo json_encode($data);
	}

	function addFAQ(){
		$data = array(
			"title" 	=> $_POST["title"],
			"title_id" 	=> $_POST["title_id"],
			"content" 	=> $_POST["content"],
			"content_id" 	=> $_POST["content_id"],
		);

		$query = $this->db->insert("tekiro_faq",$data);
		if($query){
			$data = array(
				"status" 	=> 200,
				"message"	=> "FAQ Added"
			);
		}else{			
			$data = array(
				"status" 	=> 400,
				"message"	=> "FAQ Failed to Add"
			);
		}

		echo json_encode($data);
	}

	function deletefaq(){
		if($_POST["id"]){
			$this->db->where("id",$_POST["id"]);
			$query = $this->db->delete("tekiro_faq");
			if($query){
				$data = array(
					"status" 	=> 200,
					"message"	=> "FAQ Deleted"
				);
			}else{
				$data = array(
					"status" 	=> 400,
					"message"	=> "Failed To Delete FAQ"
				);
			}
		}
		echo json_encode($data);
		return;
	}
}
