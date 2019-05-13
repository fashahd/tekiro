<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("userlogin")){
			redirect('/auth/login', 'refresh');
		}
		$this->load->model("ModelContact");
	}

	public function index()
	{
		$data["faq"]	= $this->ModelContact->getFAQ();
		$data["smtp"]	= $this->ModelContact->getSMTP();
		$session = $this->session->userdata("userlogin");
		$data["name"]	= $session["name"];
		$data["module"] = "Contact";
		$this->layout->content('index',$data);
	}

	function updateSMTP(){
		$data = array(
			"host" => $_POST["host"],
			"port" => $_POST["port"],
			"username" => $_POST["email"],
			"password" => $_POST["password"]
		);
		$this->db->where("id","1");
		$query = $this->db->update("tekiro_general",$data);
		if($query){
			$data = array(
				"status" 	=> 200,
				"message"	=> "SMTP Updated"
			);
		}else{			
			$data = array(
				"status" 	=> 400,
				"message"	=> "SMTP Failed to Update"
			);
		}

		echo json_encode($data);
	}

	public function editcontact($id = null)
	{
		$data["faq"]	= $this->ModelContact->getFAQByID($id);
		$session = $this->session->userdata("userlogin");
		$data["name"]	= $session["name"];
		$data["module"] = "Contact";
		$this->layout->content('editcontact',$data);
	}

	function updateFAQ(){
		$data = array(
			"title" 	=> $_POST["title"],
			"title_id" 	=> $_POST["title_id"],
			"email" 	=> $_POST["email"],
			"slug"		=> $this->slugify($_POST["title"])
		);
		$this->db->where("id",$_POST["id"]);
		$query = $this->db->update("tekiro_department",$data);
		if($query){
			$data = array(
				"status" 	=> 200,
				"message"	=> "Department Updated"
			);
		}else{			
			$data = array(
				"status" 	=> 400,
				"message"	=> "Department Failed to Update"
			);
		}

		echo json_encode($data);
	}

	function addDepartment(){
		$data = array(
			"title" 	=> $_POST["title"],
			"title_id" 	=> $_POST["title_id"],
			"email" 	=> $_POST["email"],
			"slug"		=> $this->slugify($_POST["title"])
		);

		$query = $this->db->insert("tekiro_department",$data);
		if($query){
			$data = array(
				"status" 	=> 200,
				"message"	=> "Department Added"
			);
		}else{			
			$data = array(
				"status" 	=> 400,
				"message"	=> "Department Failed to Add"
			);
		}

		echo json_encode($data);
	}

	function deletefaq(){
		if($_POST["id"]){
			$this->db->where("id",$_POST["id"]);
			$query = $this->db->delete("tekiro_department");
			if($query){
				$data = array(
					"status" 	=> 200,
					"message"	=> "Department Deleted"
				);
			}else{
				$data = array(
					"status" 	=> 400,
					"message"	=> "Failed To Delete Department"
				);
			}
		}
		echo json_encode($data);
		return;
	}

	function slugify($text)
	{
		// replace non letter or digits by -
		$text = preg_replace('~[^\pL\d]+~u', '-', $text);

		// transliterate
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

		// remove unwanted characters
		$text = preg_replace('~[^-\w]+~', '', $text);

		// trim
		$text = trim($text, '-');

		// remove duplicate -
		$text = preg_replace('~-+~', '-', $text);

		// lowercase
		$text = strtolower($text);

		if (empty($text)) {
			return 'n-a';
		}

		return $text;
	}
}
