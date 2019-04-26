<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Footer extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("userlogin")){
			redirect('/auth/login', 'refresh');
		}
		$this->load->model("ModelFooter");
	}

	public function front()
	{
		$session = $this->session->userdata("userlogin");
		$data["social_media"] = $this->ModelFooter->getSocialMedia();
		$data["content"] 	= $this->ModelFooter->getContent();
		$data["award"]		= $this->ModelFooter->getAward();
		$data["name"]		= $session["name"];
		$data["module"] 	= "Home";
		$this->layout->content('front',$data);
	}

	function updateSocial(){
		if(count($_POST["social"])>0){
			for($i=1;$i<=count($_POST["social"]);$i++){
				$data = array(
					"username" => $_POST["social"][$i]
				);
				$this->db->where("id",$i);
				$this->db->update("tekiro_social",$data);
			}
			$data = array(
				"status" 	=> 200,
				"message"	=> "Social Media Updated"
			);
		}else{
			$data = array(
				"status" 	=> 400,
				"message"	=> "Social Media Failed To Update"
			);
		}
		echo json_encode($data);
	}

	function deleteMedia(){
		if($_POST["id"]){
			$sql 	= "SELECT path FROM media WHERE id = '$_POST[id]'";
			$query 	= $this->db->query($sql);
			if($query->num_rows()>0){
				$row = $query->row();
				if (file_exists($row->path)) {
					unlink($row->path);
				}
				$this->db->where("id",$_POST["id"]);
				$query = $this->db->delete("media");
		
				$data = array(
					"status" 	=> 200,
					"message"	=> "Media Deleted"
				);
			}else{
				$data = array(
					"status" 	=> 400,
					"message"	=> "Failed To Delete Media"
				);
			}
		}
		echo json_encode($data);
		return;
	}

	function uploadImage(){
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
					$message = "Image Uploaded";
					$image1 = $tmppath;
					$return = $this->ModelFooter->savemedia("footer",$image1);
				}
			}else
			{
				$message = "Size More Than 2MB";
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

	function updateAbout(){
		$this->db->where("id","1");
		$query = $this->db->update("tekiro_general",array("about"=>$_POST["content"],"about_id"=>$_POST["content_id"]));
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
