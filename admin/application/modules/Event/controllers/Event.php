<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("userlogin")){
			redirect('/auth/login', 'refresh');
		}
		$this->load->model("ModelEvent");
	}

	public function index()
	{
		$session = $this->session->userdata("userlogin");
		$data["event"]	= $this->ModelEvent->getEvent();
		$data["name"]		= $session["name"];
		$data["module"] 	= "Event";
		$this->layout->content('index',$data);
	}

	function editevent($id = null){
		$session = $this->session->userdata("userlogin");
		$data["event"]	= $this->ModelEvent->getEventByID($id);
		$data["name"]		= $session["name"];
		$data["module"] 	= "Event";
		$this->layout->content('editevent',$data);
	}

	function deleteEvent(){
		if($_POST["id"]){
			$sql 	= "SELECT image_event FROM tekiro_event WHERE id = '$_POST[id]'";
			$query 	= $this->db->query($sql);
			if($query->num_rows()>0){
				$row = $query->row();
				if (file_exists($row->image_event)) {
					unlink($row->image_event);
				}
				$this->db->where("id",$_POST["id"]);
				$query = $this->db->delete("tekiro_event");
		
				$data = array(
					"status" 	=> 200,
					"message"	=> "Event Deleted"
				);
			}else{
				$data = array(
					"status" 	=> 400,
					"message"	=> "Failed To Delete Event"
				);
			}
		}
		echo json_encode($data);
		return;
	}

	function updateEvent(){
		$image_event = "";
		if($_FILES["event_image"]["name"] != ''){
			$validextensions = array("jpeg", "jpg", "png");
			$temporary 		= explode(".", $_FILES["event_image"]["name"]);
			$file_extension = end($temporary);
			if ((($_FILES["event_image"]["type"] == "image/png") || ($_FILES["event_image"]["type"] == "image/jpg") || ($_FILES["event_image"]["type"] == "image/jpeg")) && ($_FILES["event_image"]["size"] < 2097152) && in_array($file_extension, $validextensions)) {
				if ($_FILES["event_image"]["error"] > 0)
				{
					$response = "error";
					$message = "Upload Event Image Error";
					$data = array(
						"status"	=> $response,
						"message" 	=> $message
					);

					echo json_encode($data);
					return;
				}else
				{
					$url = base_url()."appsources/media/";
					$image=basename($_FILES['event_image']['name']);
					$image=str_replace(' ','|',$image);
					$type = explode(".",$image);
					$type = $type[count($type)-1];
					$tmppath="appsources/media/".uniqid(rand()).".".$type; // uniqid(rand()) function generates unique random number.
					move_uploaded_file($_FILES['event_image']['tmp_name'],$tmppath);
					$image_event = $tmppath;
					
					$data = array(
						"image_event" => $image_event
					);
					$this->db->where("id",$_POST["id"]);
					$query = $this->db->update("tekiro_event",$data);
				}
			}else
			{
				$response = "max_upload";
				$message = "Event Image Size More Than 2MB";
				$data = array(
					"status"	=> $response,
					"message" 	=> $message
				);

				echo json_encode($data);
				return;
			}
		}
		
		$slug 			= $this->slugify($_POST["title"]);
		$data = array(
			"title" 	=> $_POST["title"],
			"title_id" 	=> $_POST["title_id"],
			"category"	=> $_POST["category"],
			"content" 	=> $_POST["content"],
			"content_id" 	=> $_POST["content_id"],
			"slug" 		=> $slug
		);
		$this->db->where("id",$_POST["id"]);
		$query = $this->db->update("tekiro_event",$data);
		if($query){
			$response = "success";
			$message = "Event Updated";
			$data = array(
				"status"	=> $response,
				"message" 	=> $message
			);
		}else{
			$response = "success";
			$message = "Event Failed To Update";
			$data = array(
				"status"	=> $response,
				"message" 	=> $message
			);
		}
		echo json_encode($data);
	}

	function addEvent(){
		$image_event = "";
		if($_FILES["event_image"]["name"] != ''){
			$validextensions = array("jpeg", "jpg", "png");
			$temporary 		= explode(".", $_FILES["event_image"]["name"]);
			$file_extension = end($temporary);
			if ((($_FILES["event_image"]["type"] == "image/png") || ($_FILES["event_image"]["type"] == "image/jpg") || ($_FILES["event_image"]["type"] == "image/jpeg")) && ($_FILES["event_image"]["size"] < 2097152) && in_array($file_extension, $validextensions)) {
				if ($_FILES["event_image"]["error"] > 0)
				{
					$response = "error";
					$message = "Upload Event Image Error";
					$data = array(
						"status"	=> $response,
						"message" 	=> $message
					);

					echo json_encode($data);
					return;
				}else
				{
					$url = base_url()."appsources/media/";
					$image=basename($_FILES['event_image']['name']);
					$image=str_replace(' ','|',$image);
					$type = explode(".",$image);
					$type = $type[count($type)-1];
					$tmppath="appsources/media/".uniqid(rand()).".".$type; // uniqid(rand()) function generates unique random number.
					move_uploaded_file($_FILES['event_image']['tmp_name'],$tmppath);
					$image_event = $tmppath;
				}
			}else
			{
				$response = "max_upload";
				$message = "Event Image Size More Than 2MB";
				$data = array(
					"status"	=> $response,
					"message" 	=> $message
				);

				echo json_encode($data);
				return;
			}
		}
		
		$slug 			= $this->slugify($_POST["title"]);
		$data = array(
			"title" 	=> $_POST["title"],
			"title_id" 	=> $_POST["title_id"],
			"category"	=> $_POST["category"],
			"content" 	=> $_POST["content"],
			"content_id" 	=> $_POST["content_id"],
			"image_event" => $image_event,
			"slug" 		=> $slug
		);
		
		$query = $this->db->insert("tekiro_event",$data);
		if($query){
			$response = "success";
			$message = "Event Added";
			$data = array(
				"status"	=> $response,
				"message" 	=> $message
			);
		}else{
			$response = "success";
			$message = "Event Failed To Add";
			$data = array(
				"status"	=> $response,
				"message" 	=> $message
			);
		}
		echo json_encode($data);
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
