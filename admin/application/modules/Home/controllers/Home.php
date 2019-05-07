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
		$data["category"]	= $this->ModelHome->getCategory();
		$data["name"]		= $session["name"];
		$data["module"] 	= "Home";
		$this->layout->content('front',$data);
	}

	public function editcategory($id = null)
	{
		$session = $this->session->userdata("userlogin");
		$data["data"]		= $this->ModelHome->getCategorybyID($id);
		$data["name"]		= $session["name"];
		$data["module"] 	= "Home";
		$this->layout->content('editcategory',$data);
	}

	function deleteCategory(){
		if($_POST["id"]){
			$sql 	= "SELECT path FROM tekiro_category WHERE id = '$_POST[id]'";
			$query 	= $this->db->query($sql);
			if($query->num_rows()>0){
				$row = $query->row();
				if (file_exists($row->path)) {
					unlink($row->path);
				}
				$this->db->where("id",$_POST["id"]);
				$query = $this->db->delete("tekiro_category");
		
				$data = array(
					"status" 	=> 200,
					"message"	=> "Category Deleted"
				);
			}else{
				$data = array(
					"status" 	=> 400,
					"message"	=> "Failed To Delete Category"
				);
			}
		}
		echo json_encode($data);
		return;
	}

	function updateCategory(){
		if($_FILES["media"]["name"] != ''){
			$validextensions = array("jpeg", "jpg", "png");
			$temporary 		= explode(".", $_FILES["media"]["name"]);
			$file_extension = end($temporary);
			if ((($_FILES["media"]["type"] == "image/png") || ($_FILES["media"]["type"] == "image/jpg") || ($_FILES["media"]["type"] == "image/jpeg")) && ($_FILES["media"]["size"] < 2097152) && in_array($file_extension, $validextensions)) {
				if ($_FILES["media"]["error"] > 0)
				{
					$response = "error";
					$message = "Upload Image Error";
				}else
				{
					$url = base_url()."appsources/media/";
					$image=basename($_FILES['media']['name']);
					$image=str_replace(' ','|',$image);
					$type = explode(".",$image);
					$type = $type[count($type)-1];
					$tmppath="appsources/media/".uniqid(rand()).".".$type; // uniqid(rand()) function generates unique random number.
					move_uploaded_file($_FILES['media']['tmp_name'],$tmppath);
					$message = "Category Added";
					$image1 = $tmppath;
					$data = array(
						"path" 		=> $image1,
						"title" 	=> $_POST["title"],
						"title_id" 	=> $_POST["title_id"],
						"subtitle" 	=> $_POST["subtitle"],
						"subtitle_id" 	=> $_POST["subtitle_id"],
					);
					$return = $this->ModelHome->updateCategory($_POST["id"],$data);
					list($response,$message)=$return;
				}
			}else
			{
				$message = "Image Size More Than 2MB";
				$response = "max_upload";
			}
		}else{
			$data = array(
				"title" 	=> $_POST["title"],
				"title_id" 	=> $_POST["title_id"],
				"subtitle" 	=> $_POST["subtitle"],
				"subtitle_id" 	=> $_POST["subtitle_id"],
			);
			$return = $this->ModelHome->updateCategory($_POST["id"],$data);
			list($response,$message)=$return;
		}
		
		$data = array(
			"status" 	=> $response,
			"message"	=> $message
		);
		echo json_encode($data);
		return;
	}

	function addCategory(){
		if($_FILES["media"]["name"] != ''){
			$validextensions = array("jpeg", "jpg", "png");
			$temporary 		= explode(".", $_FILES["media"]["name"]);
			$file_extension = end($temporary);
			if ((($_FILES["media"]["type"] == "image/png") || ($_FILES["media"]["type"] == "image/jpg") || ($_FILES["media"]["type"] == "image/jpeg")) && ($_FILES["media"]["size"] < 2097152) && in_array($file_extension, $validextensions)) {
				if ($_FILES["media"]["error"] > 0)
				{
					$response = "error";
					$message = "Upload Image Error";
				}else
				{
					$url = base_url()."appsources/media/";
					$image=basename($_FILES['media']['name']);
					$image=str_replace(' ','|',$image);
					$type = explode(".",$image);
					$type = $type[count($type)-1];
					$tmppath="appsources/media/".uniqid(rand()).".".$type; // uniqid(rand()) function generates unique random number.
					move_uploaded_file($_FILES['media']['tmp_name'],$tmppath);
					$response = "success";
					$message = "Category Added";
					$image1 = $tmppath;
					$data = array(
						"path" 		=> $image1,
						"title" 	=> $_POST["title"],
						"title_id" 	=> $_POST["title_id"],
						"subtitle" 	=> $_POST["subtitle"],
						"subtitle_id" 	=> $_POST["subtitle_id"],
					);
					$return = $this->ModelHome->savecategory($data);
				}
			}else
			{
				$message = "Image Size More Than 2MB";
				$response = "max_upload";
			}
		
			$data = array(
				"status" 	=> $response,
				"message"	=> $message
			);
			echo json_encode($data);
			return;
		}
	}
}
